@section('start_css')
	<link rel="stylesheet" href="{{ asset('frontend/css/colorbox.css') }}" type="text/css">
	<style type="text/css">
		.icon_clan{
			max-width: 60px;
			max-height: 60px;
		}
	</style>
@stop
<div class="col-right">
	
	<!--End .tab-menu
	<div id="slider4">
		<span class="m-top"></span>
		<div class="viewport">
			<ul class="overview" style="width: 3670px; left: 0px;">
			@foreach($clans as $clan)
				<li>
					<div class="cont">
						<h3 class="title">
							<img src="{{ asset($clan->title_url) }}">
						</h3>
						<p>
							{!! $clan->description !!}
						</p>
						<div class="evaluate">
							<p>
								<strong>Đánh giá: </strong> <img
									src="{{ asset('frontend/images/star1.png') }}"> <img
									src="{{ asset('frontend/images/star1.png') }}"> <img
									src="{{ asset('frontend/images/star1.png') }}"> <img
									src="{{ asset('frontend/images/star1.png') }}"> <img
									src="{{ asset('frontend/images/star0.png') }}">
							</p>
						</div>
						<!--End .evaluate-->
					<!--</div> <!--End .cont--> 
					<!--<img src="{{ asset($clan->back_ground_image_url) }}">
				</li>
			@endforeach-->
			<!--</ul>
		</div>
		<ul class="bullets">
		@foreach($clans as $key => $clan)
			<li class="bullet-main-{{ $key+1 }}">
				<a href="#" class="bullet <?php if($key == 'active') echo"active" ?>" data-slide="{{ $key }}">

				<figure class="icon_clan"><img class="img-responsive" 
				src="{{ asset($clan->slide_url) }}" alt={{ $clan->name }} />
				</figure>
				</a>
			</li>
			
		@endforeach
		</ul>
	<!--</div>-->
	<!--End .slider4-->
	<div class="bottom-slider-support">
		<div class="slider-bottom">
			<div id="slider5">
				<a class="buttons prev" href="#">&lt;</a>
				<div class="viewport">
					<ul class="overview" style="width: 1269px; left: 0px;">
					@foreach($sliders as $slider)
						<li>
							<a href="{{ asset($slider->image_url) }}" rel="color" class="cboxElement">
								<img src="{{ asset($slider->image_url) }}">
							</a>
						</li>
					@endforeach
					</ul>
				</div>
				<a class="buttons next" href="#">&gt;</a>
			</div>
			<div class="title">
				<a href="{{ route('frontend.category.show', LIB) }}" class="view-all"> 
					<img src="{{ asset('frontend/images/thu-vien-hinh-anh.png') }}">
				</a>
			</div>
		</div>
		<!--End .slider-bottom-->
		<div class="support">
			<a href="#"></a>
		</div>
		<!--End .support-->

	</div>
	<!--End .bottom-slider-support-->
</div>
<!--End .col-right-->
<div style="clear: both;"></div>
@section('end_script')

	
@stop