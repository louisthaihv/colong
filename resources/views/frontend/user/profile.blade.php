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
            
            @if (Auth::user()->status == 1)
                @include('frontend.user.extendprofile')
            @else
                <td></td>
            @endif
           
            </tbody>
        </table>   
    </div>
</div>
@stop

@section('end_script')
@stop