<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kiếm thế 2</title>
    <link rel="stylesheet" href="{{ asset('admins/css/bootstrap.min.css') }}" type="text/css"></link>
    <script src="{{ asset('admins/js/jquery.js') }}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="{{ asset('admins/js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
@include('admin.error-message')
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Đăng Nhập</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px">
                <a href="{{ route('user.get.resetPassword') }}">Quên mật khẩu?</a></div>
            </div>
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form" method = "post" action="{{ route('authLogin') }}">
                    <div style="margin-bottom: 25px" class="input-group ">
                        <span style="color:red; font-size:bold;" id="username_err"></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="{{ Input::old('username') }}" placeholder="Username hoặc email" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span style="color:red; font-size:bold;" id="pass_err"></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" maxlength="20" minlength="6" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Ghi nhớ
                            </label>
                        </div>
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-md-12 controls">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                            <input type="submit" value="Login" id="btn-login" href="#" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $( "#loginform" ).submit(function( event ) {
         var pass = $('input[name=password]').val();
         var username = $('input[name=username]').val();
         if(username.length <6 || username.length >15){
            $("#username_err").text("Tên đăng nhập từ 6 -15 ký tự");
            return false;
         }
         if(pass.length <6 || pass.length >15){
            $("#pass_err").text("Mật khẩu từ 6 -15 ký tự");
            return false;
         }
          return true;
        });
    });
</script>
</html>
