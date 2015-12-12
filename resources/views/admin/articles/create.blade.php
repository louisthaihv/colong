@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="page-header">
        <h1>Bài viết / Tạo mới </h1>
</div>
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group col-sm-4 col-md-8">
            <label for="category_id">Chọn mục:</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="title">TIÊU ĐÊ:</label>
            <input name="title" type="text" value="" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="content">NÔỊ DUNG:</label>
            <textarea name="content" class="form-control" row="6" id = "editor1">
            </textarea>
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="content">TRẠNG THÁI:</label>
            <select name="status" class="form-control" id="status">
                <option value="1">Hiện</option>
                <option value="0">Ân</option>
            </select>
        </div>

        <div class="form-group col-sm-4 col-md-8">
            <label for="image_url">ẢNH: </label>
            <input type="file" class = "form-controll" name = "image_url" />
            <br />
            <img src="" class="img-thumbnail" width="304" height="236" id="image">
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <a class="btn btn-success" href="{{route('admin.articles.index')}}">Quay lại</a>
            <input type="submit" class="btn btn-primary" value="Submit" />
        </div>           
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
