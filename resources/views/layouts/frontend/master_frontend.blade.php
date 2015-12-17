<!DOCTYPE html>
<!-- saved from url=(0027)http://trutien.vieplay.com/ -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Kiếm Thế 2</title>

<link type="image/x-icon" src="{{ asset('frontend/images/logo-trutien.png') }}" rel="icon">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo-trutien.png') }}" />
    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style2.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  @yield('start_css')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="homepage">
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
	@include("layouts.frontend.header")
	<div class="content row mt-15">
		<div class="container">
            <div class="row">
                <div id="sidebar" class="col-sm-3">
                    <!--Sidebar-->
                    @include('layouts/frontend/sidebar')
                </div>
                <div id="cnt" class="col-sm-9 cnt-block">
                    <div id="categories" class="row">
                        <div class="col-sm-12">
                            <div class="categories">
                               @include('layouts/frontend/top_nav')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Content-->
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<footer></footer>
	</div>
	<!--End .container-->
	<div class="footer">
		<div class="main-footer">
		</div>
		<!--End .main-footer-->
	</div>
	<!--End .footer-->
	@yield('end_script')

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('frontend/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/js/zgame.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script>
    $(function() {
        var slider1_initialized = false;
        var slider2_initialized = false;
        var slider3_initialized = false;
        $( "#tabs").tabs({
            activate: function( event, ui ) {
                var tab_id = $(ui.newPanel).attr('id');//alert(tab_id);
                if(tab_id == "tabs-2" && slider2_initialized == false)
                {
                    //update initialization flag to true
                    slider2_initialized = true;
                }
                else if(tab_id == "tabs-3" && slider3_initialized == false)
                {
                    //update initialization flag to true
                    slider3_initialized = true;
                }
            }
        });
    });

    $(function() {
        $( "#bx-tabs" ).tabs();
    });

    $(function() {
        $( "#tn-tabs" ).tabs();
    });
</script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/zgame.js') }}"></script>
</body>
</html>