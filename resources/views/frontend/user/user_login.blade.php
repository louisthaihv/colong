@extends('layouts.info')

@section('start_css')
@stop

@section('content')
<div id="content_news">Đăng nhập
@include('admin.error-message')
    <div style="padding: 20px 0px 10px 0px;"></div>
    <div id="content_news_text">
        <form action="{{ route('authLogin') }}" autocomplete="off" id="mainForm" method="post">            
            <table class="tableform">
                <tbody>
                    
                    <tr>
                        <td style="width: 150px;"></td>
                            <div class="notice" id="infoText">
                                - Mật khẩu được lưu trong hệ thống không phân biệt chữ hoa, chữ thường<br><br>
                                - Hãy bảo vệ mật khẩu cẩn thận, đề phòng bị hack, đánh cắp tài khoản
                            </div>
                    </tr>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <tr>
                        <td style="text-align: right;">
                            <label for="username">Tên đăng nhập</label>
                            <span class="redstar">*</span>
                        </td>
                        <td style="width: 195px;">
                            <input data-val="true" data-val-required="Chưa nhập tên đăng nhập" id="username" name="username" style="width: 190px;" type="text" value="" />
                        </td>
                        <td>
                            <span class="field-validation-valid" data-valmsg-for="username" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="password">Mật khẩu</label>
                            <span class="redstar">*</span>
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng password" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ password" id="password" name="password" style="width: 190px;" type="password" value="" />
                        </td>
                        <td>
                            <span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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

@stop

@section('end_script')


@stop