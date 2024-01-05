@if (count($list_brand)>0)
    <aside class="aside-item filter-vendor">
	<div class="aside-title">Thương hiệu <span class="svg svg1 collapsible-plus"></span></div>
	<ul class="aside-content filter-group">
        @foreach ($list_brand as $brand)
            <li class="filter-item filter-item--check-box filter-item--green ">
			<label data-filter="bosch" for="filter-bosch" class="bosch">
				<input type="checkbox" id="filter-bosch" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor.filter_key" data-text="Bosch" value="(&quot;Bosch&quot;)" data-operator="OR">
				<i class="fa"></i>
					<a href="{{route('slug.index',['slug'=>$brand->slug])}}">{{$brand->name}}</a>
			</label>
		</li>
        @endforeach
	</ul>
</aside>
@endif
