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
                                    Số KNB hiện tại: {{session('account')->yuanbao}} KNB<br>
                                    Số tiền tích lũy: {{session('account')->point}} VNĐ<br>
                                    @if(Session::has('message'))
                                    <br>
                                        {{Session::get('message')}}
                                    @endif
                                    @if(empty($user->fresher))
                                    <br>
                                        <span style="color:red">
                                            Quà chỉ dành cho tân Thủ!!
                                        </span>
                                    @endif
                                    @if(Session::has('error'))
                                    <br>
                                        <span style="color:red">
                                            {{Session::get('error')}}
                                        </span>
                                    @endif
                                </div>
                        </tr>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                    </tbody>
                </table>
            </form>
            <div class="imgcenter">
            @foreach($gift_freshers as $gift_fresher)
                @if(empty($user->fresher))
                <div class="imgvip">
                    <img src="{{ asset($gift_fresher->image)}}" width="251" height="253">
                </div>
                @else
                    <div class="imgvip">
                        @if(session('account')->yuanbao >= $gift_fresher->KNB && session('account')->point >= $gift_fresher->point)
                            <a href="{{route('user.goitanthu.update', ['server_id'=>$server_id,'gift_type'=>$gift_fresher->id])}}">
                                <img src="{{ asset($gift_fresher->image)}}" width="251" height="253">
                            </a>
                        @else
                            <img src="{{ asset($gift_fresher->image)}}" width="251" height="253">
                        @endif
                    </div>
                @endif
            @endforeach
            </div>  
        </div>
    </div>
    @stop

@section('end_script')

@stop