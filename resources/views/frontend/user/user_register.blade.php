@extends('layouts.info')

@section('start_css')
@stop

@section('content')

<div id="content_news">ĐĂNG KÝ
    <div style="padding: 20px 0px 10px 0px;"></div>
    if (Session::has('$error'))
        {
            //
        }
    <div id="content_news_text">
        <form action="{{ route('user.register') }}" autocomplete="off" id="mainForm" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />      
            <table class="tableform">
                <tbody>

                    <tr>
                        <td style="width: 150px;"></td>

                    </tr>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <tr>
                        <td class="title" colspan="3">Thông tin tài khoản</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="username">Tên đăng nhập <span style="color:red">*</span> </label>    
                        </td>               
                        <td style="width: 1%;">
                            <input data-val="true" data-val-length="Tên đăng nhập quá ngắn" data-val-length-max="50" data-val-length-min="5" 
                                   data-val-regex="Tên đăng nhập chỉ chứa ký tự: a -> z, 0 -> 9 và dấu gạch dưới _" data-val-regex-pattern="^([A-Za-z0-9_]+)" 
                                   data-val-required="Chưa nhập tên đăng nhập" id="username" name="username" onblur="check_reguser(this);" style="width: 190px;" type="text" value="" /></td>
                        <td><span class="field-validation-valid" data-valmsg-for="username" data-valmsg-replace="true"></span></td>
                        </td>

                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="password">Mật khầu <span style="color:red">*</span></label>

                        </td>
                        <td>
                            <input data-val="true" data-val-required="Chưa nhập mật khẩu" id="password" name="password" style="width: 190px;" type="password" />
                        </td>
                        <td>
                            <span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span>
                        </td>

                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="re_pasword">Nhập lại mật khầu <span style="color:red">*</span></label>

                        </td>
                        <td>
                            <input data-val="true" data-val-equalto="Nhập lại mật khẩu không chính xác!" id="re_password" name="re_password" style="width: 190px;" type="password" /></td>
                        <td>
                            <span class="field-validation-valid" data-valmsg-for="re_password" data-valmsg-replace="true"></span></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="captcha">Mã kiểm tra <span style="color:red">*</span></label>
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
                            <input type="image" id="submitbtn" alt="Xác nhận" src="{{asset('images/confirm.gif')}}" tppabs="">
                            <input type="image" id="resetbtn" alt="Nhập lại" src="{{asset('images/retry.gif')}}" tppabs="" onclick="mainForm.reset();
                                    return false;">
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </form>    
    </div>
</div>
@endif
@stop

@section('end_script')

@stop