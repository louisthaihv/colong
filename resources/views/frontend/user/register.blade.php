@extends('layouts.frontend.master_frontend')

@section('start_css')
@stop

@section('content')
	@include('frontend.articles.left_sidebar', $weeks)
	<div class="col-right">
	@include('admin.error-message')
		<div class="container">
	    <h1 class="col-lg-7 well">Đăng Ký Thông Tin</h1>
			<div class="col-lg-7 well">
				<div class="row">
					<form action="{{ route('user.register') }}" method="post" id="register">
						<div class="col-sm-12">
						<div class="form-group">
							(<span class="required">*</span>)<label>Tên đăng nhập:</label>
							<span id="username_err" style="color:red"></span>
							<input type="text" placeholder="Nhập username.." class="form-control" required name="username">
						</div>
						<div class="form-group">
							(<span class="required">*</span>)<label>Password: <span id="pass_err" style="color:red"></span></label>
							<input type="password" placeholder="Nhập password.." class="form-control" required name="password" min="6" max="15">
						</div>
						<div class="form-group">
							(<span class="required">*</span>)<label>Nhập lại password: 
								<span id="re_pass_err" style="color:red"></span>
							</label>
							<input type="password" placeholder="Nhập password.." class="form-control" required name="re_password" min="6" max="15">
						</div>
						<div class="form-group">
						<div class="form-group">
							<label>Email</label>
							<span id="email_err" style="color:red"></span>
							<input type="email" placeholder="Nhập email.." class="form-control" name="email">
						</div>
							<label>Điện Thoại</label>
							<input type="text" placeholder="Số điện thoại.." class="form-control" name="phone">
						</div>		
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<button type="submit" class="btn btn-lg btn-info">Đăng ký</button>					
						</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
@stop

@section('end_script')
<script type="text/javascript">
    $(document).ready(function(){
    	$( "#register" ).submit(function( event ) {
		 var pass = $('input[name=password]').val();
		 var re_pass = $('input[name=re_password]').val();
		 var username = $('input[name=username]').val();
		 var email = $('input[name=email]').val();
		 if(username.length <6 || username.length >15){
		 	$("#username_err").text("Tên đăng nhập từ 6 -15 ký tự");
		 	return false;
		 }
		 if(!isEmail(email) && email.length > 0){
		 	$("#email_err").text("Email không đúng định dạng");
		 	return false;
		 }
		 if(pass.length <6 || pass.length >15){
		 	$("#pass_err").text("Mật khẩu từ 6 -15 ký tự");
		 	return false;
		 }
		 if(re_pass.length <6 || re_pass.length >15){
		 	$("#re_pass_err").text("Mật khẩu từ 6 -15 ký tự");
		 	return false;
		 }
		 if(re_pass != pass){
		 	$("#re_pass_err").text("Mật khẩu không khớp");
		 	return false;
		 }
		  return true;
		});
    });

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
@stop