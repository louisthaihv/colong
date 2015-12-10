@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">GIFTCODE
        <div style="padding: 20px 0px 10px 0px;"></div>
        <div id="content_news_text">
            <form action="" autocomplete="off" id="mainForm" method="post">            
                <table class="tableform">
                    <tbody>
                        
                        <tr>
                            <td style="width: 150px;"></td>
                                <div class="notice" id="infoText">
                                    - Hệ thống chỉ cho phép đổi tên nhân vật co level < 10 <br>
                                    - Lưu ý: Tên nhân vật chỉ được phép bao gồm kí tự a-z, A-Z, 0-9, -, _,...
                                </div>
                        </tr>
                        &nbsp;&nbsp;
                        <tr>
                            <td style="text-align: right;">
                                <label for="username">Giftcode</label>
                                <span class="redstar">*</span>
                            </td>
                            <td style="width: 195px;">
                                <input data-val="true" data-val-regex="Tên đăng nhập chỉ chứa ký tự: a -> z, 0 -> 9 và dấu gạch dưới _" data-val-regex-pattern="^([A-Za-z0-9_]+)" data-val-required="Chưa nhập tên đăng nhập" id="username" name="username" onblur="check_username(this);" style="width: 190px;" type="text" value="" />
                            </td>
                            <td>
                                <span class="field-validation-valid" data-valmsg-for="username" data-valmsg-replace="true"></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="email">Tên đăng nhập game</label>
                                <span class="redstar">*</span>
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Sai định dạng Email" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ email" id="email" name="email" style="width: 190px;" type="text" value="" />
                            </td>
                            <td>
                                <span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="email">Gõ lại tên đăng nhập game</label>
                                <span class="redstar">*</span>
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Sai định dạng Email" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ email" id="email" name="email" style="width: 190px;" type="text" value="" />
                            </td>
                            <td>
                                <span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span>
                                </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;"><label for="captcha">Xác nhận</label>
                                <span class="redstar">*</span>
                            </td>
                            <td>
                                <img alt="Mã xác nhận" src="../RandImg.aspx.gif" tppabs="http://taikhoan.colongonline.com/RandImg.aspx" style="padding-top: 2px; vertical-align: top;">&nbsp;
                                <input data-val="true" data-val-length="Mã xác nhận chưa chính xác" data-val-length-max="5" data-val-length-min="5" data-val-required="Chưa nhập mã xác nhận" id="captcha" name="captcha" style="text-align: center; width: 96px;" type="text" value="" />
                            </td>
                            <td><span class="field-validation-valid" data-valmsg-for="captcha" data-valmsg-replace="true"></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="image" id="submitbtn" alt="Xác nhận" src="{{asset('Images/confirm.gif')}}" tppabs="">
                                <input type="image" id="resetbtn" alt="Nhập lại" src="{{asset('Images/retry.gif')}}" tppabs="" onclick="mainForm.reset();
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