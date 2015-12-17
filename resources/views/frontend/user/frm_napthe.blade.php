@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">NẠP KIM NGUYÊN BẢO DÙNG THẺ {{ $card->name }}
        <div style="padding: 20px 0px 10px 0px;"></div>
        <img src="{{ asset($card->image) }}" alt="{{ $card->name }}">
        <div id="content_news_text">
            <form action="{{ route('user.napthe.post', $card->id) }}" autocomplete="off" id="mainForm" method="post">            
                <table class="tableform">
                    <tbody>
                        <tr>
                            <td style="width: 150px;"></td>
                                <div class="notice" id="infoText">
                                <span>
                                    - Mỗi KNB trong game, có giá trị bằng 10 đồng trên mệnh giá thẻ {{ $card->name }}
                                </span>
                                <br>
                                <span style="color:red">
                                    - Lưu ý: Nạp thẻ sai 5 lần tài khoản sẽ bị khóa nạp thẻ 1 ngày.
                                </span>
                                @if(Session::has('error'))
                                <br>
                                    <span style="color:red">
                                        - {!!session('error')!!};
                                    </span>
                                @endif
                                @if(Session::has('trans_detail_error'))
                                <br>
                                    <span style="color:red">
                                        - {!!session('useCard_result_error')!!};
                                    </span>
                                @endif
                                @if(Session::has('trans_detail_error'))
                                <br>
                                    <span style="color:red">
                                        - {!!session('trans_detail_error')!!};
                                    </span>
                                @endif
                                </div>
                        </tr>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <tr>
                            <td class="title" colspan="3">Nhập thông tin tài thẻ nạp</td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="seri">Số seri <span style="color:red">*</span></label>    
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Tên đăng nhập chỉ chứa các số: 0 -> 9" data-val-regex-pattern="^([0-9]+)" data-val-required="Nhập mã thẻ" id="seri" name="seri" onblur="check_username(this);" style="width: 190px;" type="text" value="" required/> Số seri trên thẻ
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="code">Nhập mã thẻ <span style="color:red">*</span></label>
                                
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Sai định dạng thẻ" data-val-regex-pattern="^([0-9]+)" data-val-required="Chưa nhập mã thẻ" id="code" name="code" style="width: 190px;" type="text" value="" required/>
                                Dãy số nằm dưới lớp tráng bạc.
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="username">Tên đăng nhập <span style="color:red">*</span></label>
                                
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Tên đăng nhập chỉ chứa ký tự: a -> z, 0 -> 9 và dấu gạch dưới _" data-val-regex-pattern="^([A-Za-z0-9_]+)" data-val-required="Chưa nhập tên đăng nhập" id="username" name="username" onblur="check_username(this);" style="width: 190px;" type="text" value="" required/>
                                Các nhân vật trong cùng tài khoản sẽ sử dụng.
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="re_username">Tên đăng nhập <span style="color:red">*</span></label>
                                
                            </td>
                            <td colspan="2">
                                <input data-val="true" data-val-regex="Tên đăng nhập chỉ chứa ký tự: a -> z, 0 -> 9 và dấu gạch dưới _" data-val-regex-pattern="^([A-Za-z0-9_]+)" data-val-required="Chưa nhập tên đăng nhập" id="re_username" name="re_username" onblur="check_username(this);" style="width: 190px;" type="text" value="" required/>
                                Nhập lại tên đăng nhập
                            </td>
                            
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <label for="captcha">Mã kiểm tra <span style="color:red">*</span></label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            </td>
                            <td>
                                {!! Captcha::img() !!}
                                <input data-val="true" data-val-required="Chưa nhập mã kiểm tra" id="captcha" name="captcha" onblur="check_username(this);" style="width: 90px;" type="text" value="" required/>
                            </td>
                            
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="image" id="submitbtn" alt="Xác nhận" src="{{asset('images/confirm.gif')}}" tppabs="">
                                <input type="image" id="resetbtn" alt="Nhập lại" src="{{asset('images/retry.gif')}}" tppabs="" onclick="mainForm.reset();
                                        return false;">
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>    
        </div>
    </div>

@stop

@section('end_script')
<script type="text/javascript">
    
</script>
@stop