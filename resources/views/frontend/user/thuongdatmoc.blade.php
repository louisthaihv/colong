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
                                    - Bạn đã tích lũy được: {{ Auth::user()->point }} điểm
                                </div>
                        </tr>
                        &nbsp;&nbsp;
                        
                        <table class="tableform1">
                            <tr>
                                <th>MỐC VNĐ</th>
                                <th>VẬT PHẨM</th>
                                <th>THAO TÁC</th>
                            </tr>
                            @foreach($GiftBoxs as $GiftBox )
                            <tr>
                                <td> {!! $GiftBox->Point !!} </td>
                                <td> {!! $GiftBox->GiftName !!} </td>
                                <td> 
                                    <!--@if(is_null($character->Changed) && $character->level <10)
                                    {{ route('user.get.changeCharacter',[$server->game_db, $account->acct_id, $character->char_id])}}-->
                                        <a href="#">Nhận thưởng</a>
                                    <!--@else
                                        {{"Đổi tên"}}
                                    @endif-->
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