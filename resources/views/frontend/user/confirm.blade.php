@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">ĐĂNG KÝ TÀI KHOẢN
        <div style="padding: 20px 0px 10px 0px;"></div>
        <div id="content_news_text">
            <form action="" autocomplete="off" id="mainForm" method="post">            
                <table class="tableform">
                    <tbody>
                        
                        <tr>
                            <td style="width: 150px;"></td>
                                <div class="notice" id="infoText">
                                    CHÀO MỪNG <b>{{ Auth::user()->username }}</b> ĐÃ GIA NHẬP THẾ GIỚI CỔ LONG ONLINE<BR>
                                    ĐỂ AN TOAN BẢO MẬT VÀ NHẬN HỖ TRỢ TỪ BQT<BR>
                                    BẠN VUI LONG CẬP NHÂT THÔNG TIN TÀI KHOẢN TẠI <a href="{{route('user.profile')}}">ĐÂY</a>  
                                </div>
                        </tr>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                    </tbody>
                </table>
            </form> 
        </div>
    </div>
    @stop

@section('end_script')

@stop