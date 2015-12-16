@extends('layouts.user')

@section('start_css')
@stop

@section('content')
    @if(!$characters->isEmpty())
        <div id="content_news">THÔNG TIN NHÂN VẬT<br>
                <div style="padding: 20px 0px 10px 0px;"></div>
                <div id="content_news_text">
                    <form action="" autocomplete="off" id="mainForm" method="post">            
                        <table class="tableform">
                            <tbody>
                                
                                <tr>
                                    <td style="width: 150px;"></td>
                                        <div class="notice" id="infoText">
                                            - Hệ thống chỉ cho phép đổi tên nhân vật có level < 10 <br><BR>
                                            - Lưu ý: Tên nhân vật chỉ được phép bao gồm kí tự a-z, A-Z, 0-9, -, _,...
                                        </div>
                                </tr>
                                &nbsp;&nbsp;
                                <table class="tableform1">
                                    <tr>
                                        <th>STT</th>
                                        <th>UID</th>
                                        <th>TÊN NHÂN VẬT</th>
                                        <th>LỚP NHÂN VẬT</th>
                                        <th>LEVEL</th>
                                        <th>EXP</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                    @foreach($characters as $character )
                                    <tr>
                                        <td> {!! $character->char_id !!} </td>
                                        <td> {!! $character->acct_id !!} </td>
                                        <td> {!! $character->nickName !!} </td>
                                        <td> {!! $character->faction !!} </td>
                                        <td> {!! $character->level !!} </td>
                                        <td> {!! $character->exp !!} </td>
                                        <td> 
                                            @if(is_null($character->Changed) && $character->level <10)
                                            <a href="{{ route('user.get.changeCharacter',[$server->game_db, $account->acct_id, $character->char_id])}}">Đổi tên</a>
                                            @else
                                                {{"Đổi tên"}}
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
    @else
        <p>Chưa có nhân vật nào</p>   
    @endif
@stop

@section('end_script')

@stop