<div class="box-header-nav d-none d-lg-inline-block">
	<ul class="evo-cate-nav">
		@foreach($list_menu as $row_menu)
            <x-sub1-main-menu :rowmenu="$row_menu"/>
        @endforeach
		
	</ul>
</div>