<div class="col-lg-3 col-md-12 left-content">
				<div class="evo-sidebar-pro">
					<div class="aside-filter clearfix">
	<div class="heading">Lọc</div>
	<div class="aside-hidden-mobile">
		<div class="filter-container">
			<div class="filter-containers d-none">	
				<div class="filter-container__selected-filter" style="display: none;">
					<div class="filter-container__selected-filter-list clearfix">
						<ul>
						</ul>
						<a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all" title="Bỏ hết">Bỏ hết</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			
			
			
			<!-- brands start-->
			
			<x-brand-list/>

			<!-- brands end-->
			@if (count($list_category)>0)
				<aside class="aside-item filter-category">
				<div class="aside-title">Danh mục<span class="svg svg1 collapsible-plus"></span></div>
				<ul class="aside-content filter-group">
					@foreach ($list_category as $category)
						<li class="filter-item filter-item--check-box filter-item--green ">
						<label data-filter="bosch" for="filter-bosch" class="bosch">
							<input type="checkbox" id="filter-bosch" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor.filter_key" data-text="Bosch" value="(&quot;Bosch&quot;)" data-operator="OR">
							
							<i class="fa"></i>
							<a href="{{route('slug.index',['slug'=>$category->slug])}}">{{$category->name}}</a>
						</label>
					</li>
					@endforeach
				</ul>
			</aside>
			@endif
			

			<!-- price -->
			<aside class="aside-item filter-price">
				<div class="aside-title">Giá sản phẩm <span class="svg svg1 collapsible-plus"></span></div>
				<ul class="aside-content filter-group">
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-duoi-100-000d">
							<input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
							<i class="fa"></i>
							Giá dưới 100.000đ
						</label>
					</li>
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-100-000d-200-000d">
							<input type="checkbox" id="filter-100-000d-200-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)" data-operator="OR">
							<i class="fa"></i>
							100.000đ - 200.000đ							
						</label>
					</li>	
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-200-000d-300-000d">
							<input type="checkbox" id="filter-200-000d-300-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 300.000đ" value="(>=200000 AND <=300000)" data-operator="OR">
							<i class="fa"></i>
							200.000đ - 300.000đ							
						</label>
					</li>	
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-300-000d-500-000d">
							<input type="checkbox" id="filter-300-000d-500-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="300.000đ - 500.000đ" value="(>=300000 AND <=500000)" data-operator="OR">
							<i class="fa"></i>
							300.000đ - 500.000đ							
						</label>
					</li>	
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-500-000d-1-000-000d">
							<input type="checkbox" id="filter-500-000d-1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1.000.000đ" value="(>=500000 AND <=1000000)" data-operator="OR">
							<i class="fa"></i>
							500.000đ - 1.000.000đ							
						</label>
					</li>	
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-tren1-000-000d">
							<input type="checkbox" id="filter-tren1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 1.000.000đ" value="(>1000000)" data-operator="OR">
							<i class="fa"></i>
							Giá trên 1.000.000đ
						</label>
					</li>					
				</ul>
			</aside>
			<aside class="aside-item filter-type">
				<div class="aside-title">Loại sản phẩm <span class="svg svg1 collapsible-plus"></span></div>
				<ul class="aside-content filter-group">
					<li class="filter-item filter-item--check-box filter-item--green">
						<label data-filter="máy khoan" for="filter-may-khoan">
							<input type="checkbox" id="filter-may-khoan" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type.filter_key" data-text="Máy khoan" value="(&quot;Máy khoan&quot;)" data-operator="OR">
							<i class="fa"></i>
							Máy khoan
						</label>
					</li>
					<li class="filter-item filter-item--check-box filter-item--green">
						<label data-filter="máy khoan búa" for="filter-may-khoan-bua">
							<input type="checkbox" id="filter-may-khoan-bua" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type.filter_key" data-text="Máy khoan búa" value="(&quot;Máy khoan búa&quot;)" data-operator="OR">
							<i class="fa"></i>
							Máy khoan búa
						</label>
					</li>
					<li class="filter-item filter-item--check-box filter-item--green">
						<label data-filter="máy khoan điện" for="filter-may-khoan-dien">
							<input type="checkbox" id="filter-may-khoan-dien" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type.filter_key" data-text="Máy khoan điện" value="(&quot;Máy khoan điện&quot;)" data-operator="OR">
							<i class="fa"></i>
							Máy khoan điện
						</label>
					</li>
					
					
				</ul>
			</aside>
			<aside class="aside-item filter-tag-style-1 tag-filtster">
				<div class="aside-title">Loại thiết bị <span class="svg svg1 collapsible-plus"></span></div>
				<ul class="aside-content filter-group">
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-chay-pin">
							<input type="checkbox" id="filter-chay-pin" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Chạy pin" value="(Chạy pin)" data-operator="OR">
							<i class="fa"></i>
							Chạy pin
						</label>
					</li>	
					<li class="filter-item filter-item--check-box filter-item--green">
						<label for="filter-chay-dien">
							<input type="checkbox" id="filter-chay-dien" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Chạy điện" value="(Chạy điện)" data-operator="OR">
							<i class="fa"></i>
							Chạy điện
						</label>
					</li>	
				</ul>
			</aside>
		</div>
	</div>
</div>
				</div>	
			</div>
		</div>
	</div>
</div>