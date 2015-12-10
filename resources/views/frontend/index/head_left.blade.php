<div class="col-top-left">
	<div class="buttons">
		
			<a href="#" class="download">
				<img src="{{ asset('frontend/images/choi-ngay.png') }}">
			</a>
		
		
			<a href="{{ route('user.register') }}" class="register">
			<img src="{{ asset('frontend/images/dang-ky.png') }}">
			</a>
		
		
			<a href="{{ route('user.gift.get') }}" class="giftcode">
				<img src="{{ asset('frontend/images/nap-the.png') }}">
			</a>
		
		<!--<a href="{{ route('user.napthe.get') }}" class="card">Nạp thẻ</a>-->
	</div>
	</div>
	<!--End .buttons-->
	<!--
	<div id="slider1">
		<span class="m-top"></span>
		<div class="viewport">
			<ul class="overview" style="width: 1785px; left: -1190px;">
			@foreach($galaries as $galary)
				<li>
					<a href="{{ asset($galary->link_galaries) }}" target="_blank">
						<img src="{{ asset($galary->image_url) }}">
					</a>
				</li>
			@endforeach
			</ul>
		</div>
		<ul class="bullets">
		@for($i = 0; $i<$galaries->count(); $i++)
			<li><a href="javascript:;" class="bullet <?php if($i == 0){echo "active";}?>"
				data-slide="{{ $i }}"></a></li>
		@endfor
		</ul>
		<span class="m-bottom"></span>
	</div>
	<!--End .slider1-->
