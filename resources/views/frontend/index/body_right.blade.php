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
	<div id="slider1">
		<ul class="bullets">
			
			<li>
				<a href="#" class="bullet" data-slide="1">
					<span class="tin-tuc">Tin tức</span>
				</a>
			</li>
			
		</ul>
		<div class="viewport">
			<ul class="overview" style="width: 1504px; left: 0px;">
				<li class="page">
				<?php 
					$category = App\Category::getCategory($categories, NEWS);
					$articles = App\Category::getPostAvaiable($category);
				?>
				@foreach($articles as $article)
					<div class="list-main">
						<h3>
							<a href="{{ route('frontend.article.show', $article->id) }}">
								{!! $article->title !!} 
							</a>
							<span class="time">[{{ date('d/m', strtotime($article->created_at)) }}]</span>
						</h3>
						<a href="{{ route('frontend.article.show', $article->id) }}">
							<img src="{{ asset($article->image_url) }}">
						</a>
						<p>{!! $article->content !!}</p>
					</div> 
					<!--End .list-main--> 
					<!--End .cont-->
				@endforeach
				</li>
				<li class="page">
				<?php 
					$category = App\Category::getCategory($categories, NEWS);
					$articles = App\Category::getPostAvaiable($category);
				?>
				@foreach($articles as $article)
					<div class="list-main">
						<h3>
							<a href="{{ route('frontend.article.show', $article->id) }}">
								{!! $article->title !!} 
							</a>
							<span class="time">[{{ date('d/m', strtotime($article->created_at)) }}]</span>
						</h3>
						<a href="{{ route('frontend.article.show', $article->id) }}">
							<img src="{{ asset($article->image_url) }}">
						</a>
						<p>{!! $article->content !!}</p>
					</div> 
					<!--End .list-main--> 
					<!--End .cont-->
				@endforeach
				</li>
				<li class="page">
				<?php 
					$category = App\Category::getCategory($categories, EVENT);
					$articles = App\Category::getPostAvaiable($category);
				?>
				@foreach($articles as $article)
					<div class="list-main">
						<h3>
							<a href="{{ route('frontend.article.show', $article->id) }}">
								{!! $article->title !!} 
							</a>
							<span class="time">[{{ date('d/m', strtotime($article->created_at)) }}]</span>
						</h3>
						<a href="{{ route('frontend.article.show', $article->id) }}">
							<img src="{{ asset($article->image_url) }}">
						</a>
						<p>{!! $article->content !!}</p>
					</div> 
					<!--End .list-main--> 
					<!--End .cont-->
				@endforeach
				</li>
			</ul>
		</div>
	</div>
	
	<div></div>
	<div id="slider2">
		<ul class="bullets">
			
			<li>
				<a href="#" class="bullet" data-slide="1">
					<span class="tin-tuc">Tin tức</span>
				</a>
			</li>
			
		</ul>
		<div class="viewport">
			<ul class="overview" style="width: 1504px; left: 0px;">
				<li class="page">
				
				@foreach($articles as $article)
					<div class="list-main">
						<h3>
							<a href="{{ route('frontend.article.show', $article->id) }}">
								{!! $article->title !!} 
							</a>
							<span class="time">[{{ date('d/m', strtotime($article->created_at)) }}]</span>
						</h3>
						<a href="{{ route('frontend.article.show', $article->id) }}">
							<img src="{{ asset($article->image_url) }}">
						</a>
						<p>{!! $article->content !!}</p>
					</div> 
					<!--End .list-main--> 
					<!--End .cont-->
				@endforeach
				</li>
			</ul>
		</div>
	</div>
	<div class="daily-features">
		<div class="title-features">
			<img src="{{ asset('frontend/images/tinh-nang-hang-ngay.png') }}">
		</div>
		<div id="slider3">
			<ul class="bullets">
			@foreach($weeks as $key => $week)
				<li>
					<a href="#" class="bullet <?php if($key == 0) echo"active"; ?>" data-slide="{{ $key }}">{!! $week->name !!}</a>
				</li>
			@endforeach
			</ul>
			<div class="viewport">
				<ul class="overview" style="width: 1928px; left: 0px;">
				@foreach($weeks as $week)
				<?php 
                    $events = $week->dailyEvents()->orderBy('start_time', 'ASC')->orderBy('end_time', 'ASC')->get();
                ?>
					<li class="page">
						<div class="scrollbar style-scrollbar">
							<div class="table">
								<table width="100%" cellspacing="0" cellpadding="0">
									<tbody>
									@foreach($events as $event)
										<tr>
											<td>{!!  $event->start_time .'h -'. $event->end_time .'h' !!}</td>
											<td>{!! $event->name !!}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
				@endforeach
				</ul>
			</div>
		</div>
	</div>
	</div>
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