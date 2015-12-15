@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">ĐỔI TÊN NHÂN VẬT
    <div style="padding: 20px 0px 10px 0px;"></div>
    <div id="content_news_text">
        <form action="{{ route('user.post.changeCharacter') }}" method="post" id="frm_reset">           
            <table class="tableform">
                <tbody>
                    
                    <tr>
                        <td style="width: 150px;"></td>
                            <div class="notice" id="infoText">
                                - CHỈ ĐƯỢC ĐỔI TÊN NHÂN VẬT MỘT LẦN<br><br>
                            </div>
                    </tr>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <tr>
                        <td style="text-align: right;">
                            <label for="name">Tên nhân vật hiện tại</label>
                            <span class="redstar">*</span>
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng tên nhân vật" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập name" id="name" name="name" style="width: 190px;" type="name" value="" />
                        </td>
                        <td>
                            <span class="field-validation-valid" data-valmsg-for="name" data-valmsg-replace="true" required name="name"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="name">Tên nhân vật mới<span style="color:red">*</span></label>
                            
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng name" required name="new_password" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập name" id="new_name" name="new_name" style="width: 190px;" type="name" />
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            <label for="re_name">Nhập lại Tên nhân vật mới<span style="color:red">*</span></label>
                            
                        </td>
                        <td colspan="2">
                            <input data-val="true" data-val-regex="Sai định dạng re_name" required name="rePass" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập re_name" id="rePass" name="reName" style="width: 190px;" type="name" />
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