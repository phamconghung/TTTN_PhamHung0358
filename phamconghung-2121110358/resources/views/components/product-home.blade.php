<section class="awe-section-4">	
    <div class="container evo_block-product evo_block-product-color-1">
        <div class="e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="grid_4">
            <div class="content">
                <div class="titlecp clearfix" >
                        <h3>
                            <a href="{{route('slug.index',['slug'=>$row_cat->slug])}}">{{$row_cat->name}}</a>
                        </h3>
                    <span class="hidden-md hidden-lg button_show_tab">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                    <ul class="tabs tabs-title tab-desktop ajax clearfix evo-close">
                        <li class="tab-link has-content" data-tab="tab-1" data-url="/san-pham-moi">
                            <span title="Sản phẩm mới">Sản phẩm mới</span>
                        </li>
                    </ul>
                </div>
                
                <div class="tab-1 tab-content">
                    <div class="evo-owl-product2 swiper-container products-view-grid">
                        <div class="swiper-wrapper">
                            @foreach ($product_list as $product)
                                @php
                                    $product_images = $product->images;
                                    $hinh = null;
                                    if (count($product_images) > 0) {
                                        $hinh = $product_images[0]->image;
                                    }
                                @endphp
                                <div class="swiper-slide">
                                    <div class="evo-product-item">
                                        <div class="thumb-evo">
                                            <strong> 40% </strong>
                                            <a class="thumb-img" href="{{route('slug.index',['slug'=>$product->slug])}}" title="">
                                                <img class="lazy" style="opacity: 1;" src="{{asset('images/product/'.$hinh)}}" alt="{{$hinh}}" />
                                            </a>
                                        </div>
                                        <div class="pro-brand">
                                            <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                        </div>
                                        <a href="{{route('slug.index',['slug'=>$product->slug])}}" title="" class="title">{{$product->name}}</a>
                                        <div class="flex-prices">
                                            <div class="block-prices">
                                                @if ($product->sale && $product->sale->price_sale < $product->price)
                                                    <strong class="product-price">{{$product->sale->price_sale}}₫</strong>
                                                    <span class="product-old-price">{{$product->price}}₫</span>
                                                @else
                                                    <strong class="product-price">{{$product->price}}₫</strong>
                                                @endif
                                            </div>
                                            <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884651">
                                                <input type="hidden" name="variantId" value="42790185" />
                                                <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                        <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>