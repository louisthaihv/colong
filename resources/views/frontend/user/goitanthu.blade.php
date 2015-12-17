@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">NÂNG CẤP VIP
        <div style="padding: 20px 0px 10px 0px;"></div>
        <div id="content_news_text">
            <form action="" autocomplete="off" id="mainForm" method="post">            
                <table class="tableform">
                    <tbody>
                        
                        <tr>
                            <td style="width: 150px;"></td>
                                <div class="notice" id="infoText" style="text-align:center">
                                    Mỗi tài khoản chỉ được mua một gói tân thủ<br>
                                    Số KNB hiện tại: 5000 KNB<br>
                                    Số tiền tích lũy: 100 000 VNĐ<br>
                                </div>
                        </tr>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                    </tbody>
                </table>
            </form>
            <div class="imgcenter">
                <div class="imgvip">
                    <a target="_blank" href="img_fjords.jpg">
                        <img src="{{ asset('images/goi1.png')}}" width="251" height="253">
                    </a>
                </div>

                <div class="imgvip">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{asset('images/goi2.png')}}" width="251" height="253">
                    </a>
                </div>

                <div class="imgvip">
                    <a target="_blank" href="img_fjords.jpg">
                        <img src="{{ asset('images/goi3.png')}}" width="251" height="253">
                    </a>
                </div>

                <div class="imgvip">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="{{asset('images/goi4.png')}}" width="251" height="253">
                    </a>
                </div>
            </div>  
        </div>
    </div>
    @stop

@section('end_script')

@stop