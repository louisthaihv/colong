@extends('layouts.user')

@section('start_css')
@stop

@section('content')
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
                            @foreach($characters as $characters )
                            <tr>
                                <td> {!! $characters->id !!} </td>
                                <td> {!! $characters->user_id !!} </td>
                                <td> {!! $characters->name !!} </td>
                                <td> {!! $characters->clan_id !!} </td>
                                <td> {!! $characters->level !!} </td>
                                <td> {!! $characters->exp !!} </td>
                                <td>ĐỔI TÊN</td>
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