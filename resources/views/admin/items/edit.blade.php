@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>VÂT PHÂM / EDIT </h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    
        <div class="col-md-12">
            <form action="{{ route('admin.item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                
                <table class="table">
                    <tbody>
                    <tr>
                        <td>TÊN: </td>
                        <td>
                            <input type="text" name = "name" value="{{ $item->name }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>SÔ LƯƠNG : </td>
                        <td>
                            <input type="text" name = "quantity" value="{{ $item->qualtity }}" />
                        </td>
                    </tr>
                    <tr>
                        <td>TRẠNG THÁI : </td>
                        <td>
                            <select name="status">
                                <option value="0" <?php if($item->status == 0) echo "selected"; ?>>none</option>
                                <option value="1" <?php if($item->status == 1) echo "selected"; ?>>active</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>ẢNH : </td>
                        <td>
                            <input type="file" name = "image_url" />
                            <img src="{{ asset($item->image_url) }}" id="image"/>
                        </td>
                    </tr>
                    </tbody>
                  </table>
            <a class="btn btn-default" href="{{ route('admin.item.index') }}">Quay lại</a>
            <button class="btn btn-primary" type="submit" >Lưu</a>
            </form>
        </div>
    </div>
@endsection
@section('script_close')
    <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        $('[name="image_url"]').change(function(){
        readURL(this);
    });
    </script>
@stop