@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="page-header">
        <h1>Môn phái / Sửa </h1>
</div>
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.clans.update', $clan->id) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="_method" value="PUT">
        <div class="form-group col-sm-4 col-md-8">
            <label for="name">TÊN:</label>
            <input name="name" type="text" value="{{ $clan->name }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="description">MÔ TẢ:</label>
            <textarea name="description" class="form-control" row="6" id = "editor1">
            {!! $clan->description !!}
            </textarea>
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="back_ground_image_url">ẢNH NÊN: </label>
            <input type="file" class = "form-controll" name = "back_ground_image_url" />
            <br />
            <img src="{{ asset($clan->back_ground_image_url) }}" class="img-thumbnail" width="500" height="500" id="back_ground_image_url">
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="title_url">ẢNH NHỎ: </label>
            <input type="file" class = "form-controll" name = "title_url" />
            <br />
            <img src="{{ asset($clan->title_url) }}" class="img-thumbnail" width="304" height="236" id="title_url">
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="slide_url">ẢNH Slide: </label>
            <input type="file" class = "form-controll" name = "slide_url" />
            <br />
            <img src="{{ asset($clan->slide_url) }}" class="img-thumbnail" width="304" height="236" id="slide_url">
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <a class="btn btn-default" href="{{route('admin.clans.index')}}">Quay lại</a>
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
            function readURL(input, id) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(id).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        $('[name="title_url"]').change(function(){
            readURL(this,'#title_url');
        });
        $('[name="slide_url"]').change(function(){
            readURL(this,'#slide_url');
        });
        $('[name="back_ground_image_url"]').change(function(){
            readURL(this,'#back_ground_image_url');
        });
    </script>
@stop
