@extends('layouts.info')

@section('start_css')
@stop

@section('content')

<div id="content_news">QUÊN MẬT KHẨU
    <div style="padding: 20px 0px 10px 0px;">
    </div>
    <div id="content_news_text">
<form action="{{route('user.post.ForgotPassword')}}" autocomplete="off" id="mainForm" method="post">            
<table class="tableform"><tbody>
                <tr>
                    <td class="title" colspan="3">Thông tin tài khoản</td>
                </tr>
                <tr>
                    <td style="width: 150px;"></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><label for="username">T&#234;n đăng nhập</label> <span class="redstar">*</span></td>
                    <td style="width: 195px;"><input data-val="true" data-val-regex="Tên đăng nhập chỉ chứa ký tự: a -> z, 0 -> 9 và dấu gạch dưới _" data-val-regex-pattern="^([A-Za-z0-9_]+)" data-val-required="Chưa nhập tên đăng nhập" id="username" name="username" onblur="check_username(this);" style="width: 190px;" type="text" value="" required/></td>
                    <td><span class="field-validation-valid" data-valmsg-for="username" data-valmsg-replace="true"></span></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><label for="email">Địa chỉ email</label> <span class="redstar">*</span></td>
                    <td colspan="2"><input data-val="true" data-val-regex="Sai định dạng Email" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ email" id="email" name="email" style="width: 190px;" type="text" value="" required/></td>
                    <td><span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span></td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        <label for="captcha">Mã xác nhận <span style="color:red">*</span></label>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </td>
                    <td>
                        {!! Captcha::img() !!}
                        <input data-val="true" data-val-required="Chưa nhập mã kiểm tra" id="captcha" name="captcha" onblur="check_username(this);" style="width: 90px;" type="text" value="" required/>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="image" id="submitbtn" alt="Xác nhận" src="{{asset('frontend/images/confirm.gif')}}" tppabs="{{asset('frontend/mages/confirm.gif')}}">&nbsp;&nbsp;
                        <input type="image" id="resetbtn" alt="Nhập lại" src="{{asset('frontend/images/retry.gif')}}" tppabs="{{asset('frontend/images/retry.gif')}}" onclick="mainForm.reset(); return false;">
                    </td>
                    <td></td>
                </tr>
            </tbody></table>
</form>    </div>
</div>
@stop

@section('end_script')

@stop