@extends('layouts.user')

@section('start_css')
@stop

@section('content')

<div id="content_news">THÔNG TIN TÀI KHOẢN
    <div style="padding: 20px 0px 10px 0px;"></div>
    <div id="content_news_text">
                    
        <table class="tableform">
            <tbody>

                <tr>
                    <td style="width: 150px;"></td>
            <div class="notice" id="infoText">
                - Cập nhật chính xác địa chỉ email và số điện thoại để bảo vệ tài khoản<br>
                - Chỉ có thể tự cập nhật thông tin một làn duy nhất <br> 
                - Liên hệ BQT nếu có nhu cầu thay đổi thông tin cá nhân <br> 
            </div>
            </tr>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
                <td class="title" colspan="3">Thông tin tài khoản</td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <label for="username">Tài khoản: </label>    
                </td>
                <td style="width: 195px;">
                    {{ Auth::user()->username }}
                </td>

            </tr>
            <tr>
                <td style="text-align: right;">
                    <label for="email">Địa chỉ email: </label>
                </td>
                <td colspan="2">
                    {{ Auth::user()->email }}                            
                </td>

            </tr>
            <tr>
                <td style="text-align: right;">
                    <label for="email">Số điện thoại: </label>

                </td>
                <td colspan="2">
                    {{ Auth::user()->phone }}
                </td>

            </tr>
            <tr>
                <td style="text-align: right;">
                    <label for="email">Đổi mật khẩu hòm đồ: </label>
                <td>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>    
                    <button type="button">Reset Mật khẩu</button></td>
                </td>

            </tr>
            <br>
            <br>
            <tr>
                <td class="title" colspan="3">Cập nhật thông tin</td>
            </tr>
            <form action="{{ route('user.postEdit') }}" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr>
                    <td style="text-align: right;">
                        <label for="username">Địa chỉ email: </label>    
                    </td>
                    <td style="width: 195px;">
                        <input data-val="true" data-val-regex="Sai định dạng Email" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ email" id="email" name="email" style="width: 190px;" type="text" value="" />
                    </td>

                </tr>
                <tr>
                    <td style="text-align: right;">
                        <label for="email">Số điện thoại </label>

                    </td>
                    <td colspan="2">
                        <input data-val="true" data-val-regex="Tên số điện thoại chỉ chứa ký tự: 0 -> 9" data-val-regex-pattern="^([0-9_]+)" data-val-required="Chưa nhập số điện thoại" id="phone" name="phone" onblur="check_username(this);" style="width: 190px;" type="text" value="" />
                    </td>

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
            </form>
            </tbody>
        </table>   
    </div>
</div>
@stop

@section('end_script')
@stop