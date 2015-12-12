@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="page-header">
        <h1>Quà tặng $ người chơi/ Tạo mới </h1>
</div>
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.gìtUser.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group col-sm-4 col-md-8">
            <label for="code">Code:</label>
            <input name="code" type="text" value="" class="form-control" />
            <br />
            <input type="button" value="Sinh Code" class="btn btn-default" id="random" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="description">MÔ TẢ:</label>
            <textarea name="description" class="form-control" row="6" id = "editor1">
            </textarea>
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <a class="btn btn-success" href="{{route('admin.giftUser.index')}}">Quay lại</a>
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
        var rand = function() {
            return Math.random().toString(36).substr(2); // remove `0.`
        };
        $('#random').click(function(){
            $('input[name=code]').val(rand());
        });
    </script>
@stop
