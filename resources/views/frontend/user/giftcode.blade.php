@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">GIFTCODE
        <div style="padding: 20px 0px 10px 0px;"></div>
        <div id="content_news_text">
            <form action="{{ route('user.gift.post') }}" autocomplete="off" id="mainForm" method="post">            
                <table class="tableform">
                    <tbody>
                        <tr>
                            <td style="width: 150px;"></td>
                        </tr>
                        &nbsp;&nbsp;
                        <tr>
                            <td style="text-align: right;">
                                <label for="gift_code">Giftcode</label>
                                <span class="redstar">*</span>
                            </td>
                            <td style="width: 195px;">
                                <input data-val="true" data-val-regex="Tên đăng nhập chỉ chứa ký tự: a -> z, 0 -> 9 và dấu gạch dưới _" data-val-regex-pattern="^([A-Za-z0-9_]+)" data-val-required="Chưa nhập tên đăng nhập" id="gift_code" name="gift_code" onblur="check_gift_code(this);" style="width: 190px;" type="text" value="" />
                            </td>
                            <td>
                                <span class="field-validation-valid" data-valmsg-for="gift_code" data-valmsg-replace="true"></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="username">Tên đăng nhập game</label>
                                <span class="redstar">*</span>
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Sai định dạng username" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ username" id="username" name="username" style="width: 190px;" type="text" value="" />
                            </td>
                            <td>
                                <span class="field-validation-valid" data-valmsg-for="re_username" data-valmsg-replace="true"></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="re_username">Nhập lại</label>
                                <span class="redstar">*</span>
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Sai định dạng re_username" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ re_username" id="re_username" name="re_username" style="width: 190px;" type="text" value="" />
                            </td>
                            <td>
                                <span class="field-validation-valid" data-valmsg-for="re_username" data-valmsg-replace="true"></span>
                                </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;"><label for="captcha">Xác nhận</label>
                                <span class="redstar">*</span>
                            </td>
                            <td>
                                captcha
                            </td>
                            <td><span class="field-validation-valid" data-valmsg-for="captcha" data-valmsg-replace="true"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            </td>
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