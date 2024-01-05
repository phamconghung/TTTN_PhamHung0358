<section class="awe-section-5">	
	<div class="container">
	<div class="row">
        @foreach ($list_banner as $row_banner)
        @if ($loop->first)
            <div class="col-md-6 col-12">
			<a href="#" title="Evo Tools">
                <img width="680" height="226" class="lazy" src="{{asset('images/banner/'.$row_banner->image) }}" alt="Evo Tools" />			</a>
		</div>
        @else
          <div class="col-md-6 col-12">
			<a href="#" title="Evo Tools">
                <img width="680" height="226" class="lazy" src="{{asset('images/banner/'.$row_banner->image) }}" alt="Evo Tools" />			</a>
		</div>  
        @endif
        @endforeach
	</div>
</div>
</section>
