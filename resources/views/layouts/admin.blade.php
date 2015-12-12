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
    <link href="{{ asset('admins/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fronts/css/bootstrap-formhelpers.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admins/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admins/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('admins/css/main.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css_open')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('adminIndex') }}">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        {{ Auth::user()->name }}
                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('/auth/logout') }}"><i class="fa fa-fw fa-user"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{ route('admin.articles.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản Lý bài viết</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý hạng mục</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.events.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý sự kiện</a>
                    </li>
                    @if(Auth::user()->role_id == ADMIN)
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý người dùng</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('admin.galaries.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý ảnh lớn</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.popups.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý Popups</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý slide nhỏ</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.clans.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý môn phái</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.gifts.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý quà tặng</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.giftUser.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý quà tặng&User</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.cards.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý thẻ</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.server.index') }}">
                        <i class="fa fa-fw fa-dashboard"></i>Quản lý Server</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admins/js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admins/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronts/js/bootstrap-formhelpers.min.js') }}"></script>
    @yield('script_close')
</body>
</html>
