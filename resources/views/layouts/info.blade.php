<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link rel="icon" href="#" type="image/x-icon" />
        <title>Kiếm thế 2</title>

        <!-- Custom CSS -->
        <link href="{{ asset('user/css/Site.css') }}" rel="stylesheet">
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
                        <a href="{{ route('user.napthe.get') }}" tppabs="" title="">Nạp KNB</a>
                    </div>
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
                        <a target="_blank" href="" tppabs="" title="" rel="nofollow">Hỗ trợ</a>
                    </div>
                </div>
            </div>
            <div class="main_content">
                <div id="main_container">
                    <!--Content
                    
                    <script src="{{ asset('user/js/jquery-1.7.1.js')}}" tppabs=""></script>
                    <script src="{{ asset('user/js/jquery.validate.min.js')}}" tppabs=""></script>
                    <script src="{{ asset('user/js/jquery.validate.unobtrusive.min.js')}}" tppabs=""></script>
                    -->
                    <div class="leftcol">
                        <div class="secur_ind">
                            Trang tài khoản<br>
                            <br>
                            CỔ LONG ONLINE<br>
                            <br>
                        </div>
                        <div class="secur_inf">
                            <span class="bold">Tài khoản</span><br>
                            Đây là hệ thống tài khoản dành riêng cho dịch vụ trò chơi Cổ Long Online.</div>
                        <div class="secur_inf">
                            <span class="bold">Đăng ký nhanh chóng</span><br>
                            Chỉ cần vài bước đơn giản là bạn có ngay một tài khoản và có thể lập tức tham gia Cổ Long Online.
                        </div>
                        <div class="secur_inf">
                            <span class="bold">Bảo vệ tài khoản game</span><br>
                            Không chia sẻ tài khoản với người khác. Tuyệt đối không dùng các phần mềm Auto,
                            bot, hack để tránh bị keylog dẫn đến mất tài khoản game.<br>
                            Tài khoản, vật phẩm trong game bị mất sẽ không thể tìm lại
                        </div>

                    </div>

                    <div class="rightcol">


                        <script src="{{ asset('user/js/MyApp.js')}}" tppabs=""></script>

                        @yield('content')
                    </div>
                    <!--End Content-->
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
        <script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../www.google-analytics.com/analytics.js'/*tpa=http://www.google-analytics.com/analytics.js*/, 'ga');

    ga('create', 'UA-42635616-1', 'http://taikhoan.colongonline.com/Account/volamtieu.com');
    ga('send', 'pageview');
        </script>
    </body>
    <!-- jQuery -->
    @yield('script_close')
</html>