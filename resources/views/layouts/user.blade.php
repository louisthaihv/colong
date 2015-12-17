<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link rel="icon" href="#" type="image/x-icon" />
        <title>Kiếm thế 2</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fronts/css/bootstrap-formhelpers.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('user/css/Site.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('user/css/plugins/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('user/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('user/css/main.css') }}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('css_open')
    </head>
    <body>
        <!--Top Bar-->
        <div id="top_bar">
            <div id="top_bar_container">
                <div id="top_bar_menu">
                    <a href="{{ route('frontend.index') }}" title="Trang chủ Cổ Long Online hiện đang được xây dựng!">Trang chủ</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a target="_blank" href="#" title="Tham gia thảo luận cùng các game thủ Cổ Long Online" rel="nofollow">Facebook</a>
                </div>
                    @if(!Auth::check())
                <div id="top_bar_userdisplay">
                        <a href="{{ route('user.register') }}" tppabs="#" title="Đăng ký tài khoản Cổ Long Online">Đăng ký</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="{{ route('authLogin') }}">Đăng nhập</a>
                </div>
                    @else
                <div id="top_bar_menu" style="float:right">
                        <a title="Trang chủ Cổ Long Online hiện đang được xây dựng!">Xin chào: <b>{{ Auth::user()->username }}</b> </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="{{ route('authLogout') }}">Đăng xuất</a>
                        @if(Auth::user()->isAdmin())
                            &nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{ route('adminIndex') }}">Giao diện quản lý</a>
                        @endif
                </div>
                    @endif
            </div>
        </div>
        <!--End Top Bar-->
        <div id="main_background">
            <!--Main-->
            <div id="main_menu">
                <div id="main_menu_container">
                    <div class="main_menu_item1">
                        <a tppabs="" title="">Tài khoản</a>
                    </div>
                    <div class="main_menu_item2">
                        <a href="{{ route('user.napthe.get') }}" tppabs="" title="">Nạp KNB</a></div>
                    @if(isset($show_gift))
                    <div class="main_menu_item2">
                        <a href="{{ route('user.gift.get') }}" tppabs="" title="">Gift code</a>
                    </div>
                    @endif
                    @if(isset($download))
                    <div class="main_menu_item2">
                        <a href="#" tppabs="" title="">Dowload</a>
                    </div>
                    @endif
                    <div class="main_menu_item2">
                        <a href="#" tppabs="" title="" rel="nofollow">Hỗ trợ</a>
                    </div>
                </div>
            </div>
            <div class="main_content">
                <div id="main_container">
                    <!--Content-->
                    <div class="leftcol">
                        <div class="secur_inf1">
                            <a href="{{ route('user.get.changePassword')}}">Đổi mật khẩu<br></a>
                        </div>
                        <div class="secur_inf2">
                            <a href="{{ route('user.profile') }}">Thông tin tài khoản<br></a>
                        </div>
                        <div class="secur_inf3">
                        <a href="{{ route('user.thongtinnhanvat.show') }}">Thông tin nhân vật</a>
                        </div>
                        <div class="secur_inf4">
                            <a href="{{ route('user.goitanthu') }}">Gói tân thủ</a>
                        </div>
                        <div class="secur_inf5">
                            <a href="{{ route('user.thuongdatmoc.get') }}">Nhận thưởng đạt mốc</a>
                        </div>
                    </div>

                    <div class="rightcol">
                        <!---Content-->
                        @yield('content')
                    </div>
                </div>
                <div id="main_bottom_bar"></div>
                <div style="clear:both;"></div>
            </div>
            <!--End Main-->
        </div>
        <!--Footer-->
        <div id="footer_div">
            <div id="footer_container">
            </div>
        </div>
        <!--End Footer-->
    </body>
    <!-- jQuery -->
    <script src="{{ asset('user/js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronts/js/bootstrap-formhelpers.min.js') }}"></script>
    @yield('script_close')
</html>