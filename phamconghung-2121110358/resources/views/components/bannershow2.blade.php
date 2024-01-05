<section class="awe-section-8">	
	<div class="container section_banner_evo_2"  >
		@foreach ($list_banner2 as $row_banner)
        @if ($loop->first)
	<a  title="Evo Tools">
		<img  style="opacity: 1;" src="{{asset('images/banner/'.$row_banner->image) }}" alt="Evo Tools" />
	</a>
	@else
	<a title="Evo Tools">
		<img style="opacity: 1;"  src="{{asset('images/banner/'.$row_banner->image) }}" alt="Evo Tools" />
	</a>
	@endif
        @endforeach
</div>
</section>