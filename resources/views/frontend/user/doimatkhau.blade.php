@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">ĐỔI MẬT KHẨU
    <div style="padding: 20px 0px 10px 0px;"></div>
    <div id="content_news_text">
        <form action="{{ route('user.post.changePassword') }}" method="post" id="frm_reset">           
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
                            <label for="password">Mật khẩu hiện tại</label>
                            <span class="redstar">*</span>
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng password" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ password" id="password" name="password" style="width: 190px;" type="password" value="" />
                        </td>
                        <td>
                            <span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true" required name="password"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="password">Mật khẩu mới<span style="color:red">*</span></label>
                            
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng password" required name="new_password" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ password" id="new_password" name="new_password" style="width: 190px;" type="password" value="new_password" />
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="re_pasword">Nhập lại mật khẩu mới<span style="color:red">*</span></label>
                            
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng re_password" required name="rePass" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập  re_password" id="rePass" name="rePass" style="width: 190px;" type="password" value="nePass" />
                        </td>
                        
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
@stop

@section('end_script')

@stop