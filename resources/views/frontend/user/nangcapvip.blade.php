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
                                <div class="notice" id="infoText">
                                    - Chi tiết hệ thống vip tham khảo tại đây<br><br>
                                    - Điểm tích lũy hiện tại: 10.000 điểm
                                </div>
                        </tr>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                    </tbody>
                </table>
            </form>
            <div class="imgcenter">
            <div class="imgvip">
                <a target="_blank" href="img_fjords.jpg">
                    <img src="{{ asset('images/vip1.jpg')}}" width="300" height="200">
                </a>
                <div class="descimgvip">5000 điểm</div>
            </div>

            <div class="imgvip">
                <a target="_blank" href="img_forest.jpg">
                    <img src="{{asset('images/vip2.jpg')}}" width="300" height="200">
                </a>
                <div class="descimgvip">10000 điểm</div>
            </div>
            </div>  
        </div>
    </div>
    @stop

@section('end_script')

@stop