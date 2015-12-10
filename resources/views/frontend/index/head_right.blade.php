<div class="col-top-right">
<ul class="tab-menu">
		<li class="tab1">
			<a href="{{ route('frontend.category.show', SECRET) }}"></a>
		</li>
		<li class="tab2">
			<a href="{{ route('frontend.category.show', HANDBOOK) }}"></a>
		</li>
		<li class="tab3">
			<a href="{{ route('frontend.category.show', FEATURE) }}"></a>
		</li>
		<li class="tab4">
			<a href="{{ route('frontend.category.show', FEATURE) }}"></a>
		</li>
		<li class="tab5">
			<a href="{{ route('frontend.category.show', FEATURE) }}"></a>
		</li>
		<li class="tab6">
			<a href="{{ route('frontend.category.show', FEATURE) }}"></a>
		</li>
	</ul>
	<!--<div id="slider2">
		<ul class="bullets">
			<li><a href="#" class="bullet active" data-slide="0">
				<span class="moi-nhat">Mới nhất</span>
				</a>
			</li>
			<li>
				<a href="#" class="bullet" data-slide="1">
					<span class="tin-tuc">Tin tức</span>
				</a>
			</li>
			<li>
				<a href="#" class="bullet" data-slide="2">
					<span class="su-kien">Sự kiện</span>
				</a>
			</li>
			<a href="#" class="view-all">+</a>
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
				<!--@endforeach
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
				<!--@endforeach
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
				<!--@endforeach
				</li>
			</ul>
		</div>
	<!--</div>-->
</div>