<!DOCTYPE html>
<!-- saved from url=(0027)http://trutien.vieplay.com/ -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Kiếm Thế 2</title>

<link type="image/x-icon" src="{{ asset('frontend/images/logo-trutien.png') }}" rel="icon">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo-trutien.png') }}" />
<script type="text/javascript" src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('frontend/js/loader.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.slide.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
				document,'script','//connect.facebook.net/en_US/fbevents.js');

		fbq('init', '1673783799521085');
		fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
				   src="https://www.facebook.com/tr?id=1673783799521085&ev=PageView&noscript=1"
				/></noscript>
	<!-- End Facebook Pixel Code -->
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/Custom.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/css') }}" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
    <link rel="stylesheet" href="styles/ie8.css" type="text/css" />
    <![endif]-->
<!--[if lt IE 8]>
    <link rel="stylesheet" href="styles/ie.css" type="text/css" />
    <![endif]-->
  @yield('start_css')
</head>
<body cz-shortcut-listen="true">
<!-- facebook js-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1609703232582143";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--End facebook js-->
	<div id="cboxOverlay" style="display: none;"></div>
	<div id="colorbox" class="" style="padding-bottom: 42px; padding-right: 42px; display: none;">
		<div id="cboxWrapper">
			<div>
				<div id="cboxTopLeft" style="float: left;"></div>
				<div id="cboxTopCenter" style="float: left;"></div>
				<div id="cboxTopRight" style="float: left;"></div>
			</div>
			<div style="clear: left;">
				<div id="cboxMiddleLeft" style="float: left;"></div>
				<div id="cboxContent" style="float: left;">
					<div id="cboxLoadedContent" class="" style="width: 0px; height: 0px; overflow: hidden;"></div>
					<div id="cboxLoadingOverlay" class=""></div>
					<div id="cboxLoadingGraphic" class=""></div>
					<div id="cboxTitle" class=""></div>
					<div id="cboxCurrent" class=""></div>
					<div id="cboxNext" class=""></div>
					<div id="cboxPrevious" class=""></div>
					<div id="cboxSlideshow" class=""></div>
					<div id="cboxClose" class=""></div>
				</div>
				<div id="cboxMiddleRight" style="float: left;"></div>
			</div>
			<div style="clear: left;">
				<div id="cboxBottomLeft" style="float: left;"></div>
				<div id="cboxBottomCenter" style="float: left;"></div>
				<div id="cboxBottomRight" style="float: left;"></div>
			</div>
		</div>
		<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
	</div>
	@include('frontend.user.login')
	<div id="wrapper">
		<div class="topNav">
			<div class="main-topNav">
				<ul class="left">
					<li class="color2">
						<a href="#">Chơi ngay <img src="{{ asset('frontend/images/icon-new.gif') }}"></a>
					</li>
				</ul>
				<ul class="right">
					@if(Auth::check())
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				          	<li style="border-right: 0 !important"><a href="{{ route('user.get.changePassword') }}">Đổi mật khẩu</a></li>
				            <li style="border-right: 0 !important"><a href="{{ route('authLogout') }}">Đăng xuất</a></li>
				            <li tyle="border-right: 0 !important"><a href="{{ route('user.profile',Auth::user()->id) }}">Thông tin cá nhân</a></li>
				            @if(Auth::user()->isAdmin())
				            	<li tyle="border-right: 0 !important"><a href="{{ route('adminIndex') }}">Giao diện quản lý</a></li>
				            @endif
				          </ul>
				        </li>
					@else
						<li><a href="{{ route('user.register') }}">Đăng ký</a></li>
						<li>
							<a href="#"data-toggle="modal" data-target="#login_modal">Đăng nhập</a>
						</li>
					@endif
				</ul>
				<ul class="right">
					<li><a href="{{ route('user.napthe.get') }}">Nạp vàng</a></li>
					<li><a href="#">Hỗ trợ</a></li>
				</ul>
			</div>
			<!--End .main-topNav-->
		</div>
		<!--End .topNav-->

		<div class="navBar">
			<div class="main-navBar">
				<ul>
					<li><a href="{{ route('frontend.index') }}">Trang chủ</a></li>
					<li><a href="{{ route('frontend.category.show', NEWS) }}">Tin tức</a></li>
					<li><a href="{{ route('frontend.category.show', GUID) }}">Hướng dẫn</a></li>
					<li class="logo-main">
						<a href="/">
							<img src="{{ asset('frontend/images/logo-trutien.png') }}">
						</a>
					</li>
					<li><a href="{{ route('frontend.category.show', FEATURE) }}">Tính năng</a></li>
					<li><a href="{{ route('frontend.category.show', LIB) }}">Thư viện</a></li>
					<li><a href="https://www.facebook.com/groups/kthe2khonghutmau/" target="_blank">Diễn đàn</a></li>
					<div style="clear: both;"></div>
				</ul>
			</div>
			<!--End .main-navBar-->
		</div>
		<!--End .navBar-->

		<div class="header">
			<div class="main-header">
				<div class="img">
					{{-- <img src="{{ asset('frontend/images/title-big.png') }}"> --}}
				</div>
			</div>
		</div>
		<!--End .header-->
		<div class="container">
			@yield('content')
		</div>
		<!--End .container-->
		<div class="footer">
			<div class="main-footer">
			</div>
			<!--End .main-footer-->
		</div>
		<!--End .footer-->
	</div>
	@yield('end_script')
</body>
</html>