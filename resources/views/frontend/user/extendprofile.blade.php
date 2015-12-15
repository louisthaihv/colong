
<form action="{{ route('user.postEdit') }}" method="POST" enctype="multipart/form-data">    
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <tr>
        <td class="title" colspan="3">Cập nhật thông tin</td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <label for="username">Địa chỉ email: </label>    
        </td>
        <td style="width: 195px;">
            <input data-val="true" data-val-regex="Sai định dạng Email" data-val-regex-pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" data-val-required="Chưa nhập địa chỉ email" id="email" name="email" style="width: 190px;" type="text" value="" />
        </td>

    </tr>
    <tr>
        <td style="text-align: right;">
            <label for="email">Số điện thoại </label>

        </td>
        <td colspan="2">
            <input data-val="true" data-val-regex="Tên số điện thoại chỉ chứa ký tự: 0 -> 9" data-val-regex-pattern="^([0-9_]+)" data-val-required="Chưa nhập số điện thoại" id="phone" name="phone" onblur="check_username(this);" style="width: 190px;" type="text" value="" />
        </td>

    </tr>

    <tr>
        <td></td>
        <td>
            <input type="image" id="submitbtn" alt="Xác nhận" src="{{asset('Images/confirm.gif')}}" tppabs="">
            <input type="image" id="resetbtn" alt="Nhập lại" src="{{asset('Images/retry.gif')}}" tppabs="" onclick="mainForm.reset();
                return false;">
        </td>
        <td></td>
    </tr>
</form>