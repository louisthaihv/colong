@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Ảnh popups / Tạo </h1>
</div>
<div class="row">
    @include('admin.error-message')
    <div class="col-md-12">
        <form action="{{ route('admin.popups.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <table class="table">
                <tbody>
                    <tr>
                        <td>ẢNH: </td>
                        <td>
                            <input type="file" name = "image_url" />
                            <img src="" id="image"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ĐƯỜNG DẪN: 
                        </td>
                        <td>
                            <input name="link_popup" type="text" value="" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>TRẠNG THÁI: </td>
                        <td>
                            Hiện
                            <input type="radio" name="status" value="1" > 
                            &nbsp;Ân
                            <input type="radio" name="status" value="0" checked> 
                        </td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-default" href="{{ route('admin.popups.index') }}">Quay lại</a>
            <button class="btn btn-primary" type="submit" >Lưu</a>
        </form>
    </div>
</div>
@endsection
@section('script_close')
<script src="{{ asset('admins/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('admins/ckeditor/adapters/jquery.js') }}"></script>
@include('admin.script')
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
$('[name="image_url"]').change(function () {
    readURL(this);
});
</script>
@stop