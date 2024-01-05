<section class="awe-section-1">	
	<div class="section_slider home-slider swiper-container evo-width-slider swiper-container-initialized swiper-container-horizontal">
	<div class="swiper-wrapper" id="swiper-wrapper-5975acfbfb7a6dd1" aria-live="off" style="transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
		
		@foreach ($list_slider as $row_slider)
        @if ($loop->first)
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2" style="width: 1190px;">
			<a href="/collections/all" class="clearfix" title="Evo Tools">
				<picture>
					<img width="1808" height="600" src="{{asset('images/slider/'.$row_slider->image) }}" alt="Evo Tools" class="img-responsive center-block d-block mx-auto">
				</picture>
			</a>
		</div>
        @else
            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" style="width: 1190px;">
			<a href="#" class="clearfix" title="Evo Tools">
				<picture>
					<img width="1808" height="600" src="{{asset('images/slider/'.$row_slider->image) }}" alt="Evo Tools" class="img-responsive center-block d-block mx-auto">
				</picture>
			</a>
		</div>
        @endif    
        @endforeach
	</div>
	<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
<script>
	var swiper = new Swiper('.home-slider', {
		autoplay: {
			delay: 3500,
			disableOnInteraction: false
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		}
	});
</script>
</section>