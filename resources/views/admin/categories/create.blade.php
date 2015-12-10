@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Hạng mục / Tạo mới </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                     <label> TÊN: </label>
                     <input type="text" name="name" class="form-control" value="{{  Session::getOldInput('name') }}"/>
                </div>
                <div class="form-group">
                     <label> NÔỊ DUNG: </label>
                     <textarea name="description" id="editor1">{{ Session::getOldInput('description') }}</textarea>
                </div>
                <div class="form-group">
                     <label> ẢNH: </label>
                     <input type="file" name="image_url" class="form-control"/>
                     <img src="" id = "image">
                </div>
                <div class="form-group">
                     <label> LOẠI: </label>
                     <input type="text" name="type" class="form-control" value="{{  Session::getOldInput('type') }}"/>
                </div>
                <div class="form-group">
                     <label> TRẠNG THÁI: </label>
                     <input type="text" name="status" class="form-control" value="{{  Session::getOldInput('status') }}"/>
                </div>
            <a class="btn btn-default" href="{{ route('admin.categories.index') }}">Quay lại</a>
            <button class="btn btn-primary" type="submit" >Tạo mới</a>
            </form>
        </div>
    </div>
@stop
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
        $('[name="image_url"]').change(function(){
        readURL(this);
    });
    </script>
@stop