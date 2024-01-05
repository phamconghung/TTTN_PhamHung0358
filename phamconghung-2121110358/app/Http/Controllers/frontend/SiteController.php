<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Link; 
use App\Models\Product; 
use App\Models\Category; 
use App\Models\Brand; 
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index($slug = null){
        if($slug == null){
            return $this->home();
        }
        else
        {
            $link = Link::where('slug', '=', $slug)->first();
            if($link == null){
                $product = Product::where([['status','=','1'],['slug','=',$slug]])->first();
                if($product!=null)
                {
                    return $this->product_detail($product);
                }
                else{
                    $args=[
                        ['status','=','1'],
                        ['slug','=',$slug],
                        ['type','=','post']
                    ];
                    $post = Post::where($args)->first();
                    if($post!=null){
                        return $this->post_detail($post);
                    }
                    else{
                        return $this->error_404($slug);
                    }
                }
            }else{
                $type = $link->type;
                switch($type){
                    case 'category': {
                            return $this->product_category($slug);
                        }
                    case 'brand': {
                            return $this->product_brand($slug);
                        }
                    case 'topic': {
                            return $this->post_topic($slug);
                        }
                    case 'page': {
                            return $this->post_page($slug);
                        }
                }
            }
        }
        // return view('greeting', ['name' => 'hung']);
    }
    public function home()
    {
        $list_category = Category::where([['parent_id','=',0], ['status', '=',1]])->get();
        return view('frontend.home',compact('list_category'));
    }
    public function product_category($slug)
    {
        $row_cat = Category::where([['slug','=',$slug],['status','=', 1]])->first();
        $list_category_id = [$row_cat->id];

        $list_category1 = Category::where([['parent_id', '=', $row_cat->id], ['status', '=', 1]])->get();
        if (count($list_category1) > 0) {
            foreach ($list_category1 as $row_cat1) {
                array_push($list_category_id, $row_cat1->id);
                $list_category2 = Category::where([['parent_id', '=', $row_cat1->id], ['status', '=', 1]])->get();
                if (count($list_category2) > 0) {
                    foreach ($list_category2 as $row_cat2) {
                        array_push($list_category_id, $row_cat2->id);
                        $list_category3 = Category::where([['parent_id', '=', $row_cat2->id], ['status', '=', 1]])->get();
                        if (count($list_category3) > 0) {
                            foreach ($list_category3 as $row_cat3) {
                                array_push($list_category_id, $row_cat3->id);
                            }
                        }
                    }
                }
            }
        }
        $product_list = Product::where('status', 1)
            ->whereIn('category_id', $list_category_id)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('frontend.product-category', compact('product_list','row_cat'));
    }
    public function product_brand($slug)
    {
        $row_brand = Brand::where([['slug','=',$slug],['status','=', 1]])->first();
        $product_list = Product::where([['status', 1],['brand_id','=',$row_brand->id]])
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        return view('frontend.product-brand',compact('product_list','row_brand'));
    }
    public function post_topic()
    {
        return view('frontend.post-topic');
    }
    public function post_page($slug)
    {
        $page = Post::where([['slug', '=', $slug], ['status', '=', 1]])->first();
        return view('frontend.post-page', compact('page'));
    }
    public function product_detail($product){
         $brand = $product->brand;

        $relatedProducts = Product::where('brand_id', $brand->id)
            ->where('id', '!=', $product->id)
            ->take(10)
            ->get();

        return view('frontend.product-detail',compact('product','relatedProducts'));
    }
    
    public function post_detail($post){
        return view('frontend.post-detail');
    }
    public function error_404($slug){
        return view('frontend.404');
    }
}