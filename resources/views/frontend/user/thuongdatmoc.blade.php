@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">NHẬN THƯỞNG ĐẠT MỐC
        <div style="padding: 20px 0px 10px 0px;"></div>
        <div id="content_news_text">
            <form action="" autocomplete="off" id="mainForm" method="post">            
                <table class="tableform">
                    <tbody>
                        <tr>
                            <td style="width: 150px;"></td>
                                <div class="notice" id="infoText">
                                    - Bạn đã tích lũy được: 
                                    {{ $account->point }} điểm<br/>
                                    @if(Session::has('message'))
                                    <br /> {{Session::get('message')}}
                                    @endif
                                    @if(Session::has('error'))
                                        <span style="color:red">
                                        {{Session::get('error')}}
                                        </span>
                                    @endif
                                </div>
                        </tr>
                        &nbsp;&nbsp;
                        <table class="tableform1">
                            <tr>
                                <th>MỐC VNĐ</th>
                                <th>VẬT PHẨM</th>
                                <th>THAO TÁC</th>
                            </tr>
                            @foreach($gifts as $gift )
                            <tr>
                                <td> {!! $gift->point !!} </td>
                                <td> {!! $gift->name !!} </td>
                                <td> 
                                @if($account->point >= $gift->point)
                                    <a href="{{route('user.thuongdatmoc.do', ['server_id'=>$server_id, 'gift_id'=>$gift->id])}}">Nhận thưởng</a>
                                @else
                                    Nhận thưởng
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </tbody>
                </table>
            </form>    
        </div>
    </div>
    @stop

@section('end_script')

@stop