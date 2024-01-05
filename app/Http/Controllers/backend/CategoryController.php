<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Link;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('status', '!=', '0')
            ->orderBy('created_at', 'desc')
            ->get();
        $title = 'Tất Cả Danh Mục';
        return view("backend.category.index", compact('category', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm Danh Mục';
        $category = Category::where('status', '!=', '0')
            ->get();
        $html_sort_order = "";
        $html_parent_id = "";

        foreach ($category as $item) {
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'" . (($item->sort_order + 1 == old('sort_order')) ? ' selected ' : ' ') . " >Sau: " . $item->name . "</option>";

            $html_parent_id .= "<option value='" . $item->id . "'" . (($item->id == old('parent_id')) ? ' selected ' : ' ') . ">" . $item->name . "</option>";
        }
        return view("backend.category.create", compact('title', 'html_sort_order', 'html_parent_id'));
    }
    public function status($id)
    {

        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->metakey = $request->metakey;
        $category->metadesc = $request->metadesc;
        $category->sort_order = $request->sort_order;
        $category->parent_id = $request->parent_id;
        $category->level = 1;
        $category->status = $request->status;
        $category->created_at = date('Y-m-d H:i:s');
        //upload file

        if ($category->save()) {
            $link = new Link();
            $link->slug = $category->slug;
            $link->table_id = $category->id;
            $link->type = 'category';
            $link->save();
            return redirect()->route('category.index')->with('message', ['type' => 'success', 'msg' => 'Thêm thành công!']);
        }

        return redirect()->route('category.create')->with('message', ['type' => 'danger', 'msg' => 'Thêm thất bại!!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
    public function delete($id)
    {
        
    }
    public function delete_multi(Request $request)
    {
        
    }
    public function trash()
    {
        
    }
    public function trash_multi(Request $request)
    {

        
    }
    public function restore($id)
    {

    }
}
