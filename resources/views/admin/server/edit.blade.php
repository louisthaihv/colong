@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="page-header">
        <h1>Server / Sửa </h1>
</div>
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.server.update', $server->id) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="_method" value="PUT">
        <div class="form-group col-sm-4 col-md-8">
            <label for="name">Name:</label>
            <input name="name" type="text" value="{{ $server->name }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="username">Username:</label>
            <input name="username" type="text" value="{{ $server->username }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="password">Password:</label>
            <input name="password" type="text" value="{{ $server->password }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="driver">Driver:</label>
            <select name="driver" class="form-control">
                <option value="mysql" <?php
                    if($server->driver =="mysql") {
                        echo "selected";
                    }
                 ?>>mysql</option>
                <option value="sqlsrv" <?php
                    if($server->driver =="sqlsrv") {
                        echo "selected";
                    }
                 ?>>sqlsrv</option>
            </select>
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="host">Host:</label>
            <input name="host" type="text" value="{{ $server->host }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="User_DB">User_DB:</label>
            <input name="user_db" type="text" value="{{ $server->user_db }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="game_db">Game_DB:</label>
            <input name="game_db" type="text" value="{{ $server->game_db }}" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <label for="game_db">Ảnh:</label>
            <input type="file" name = "image" />
            <img src="{{ asset($server->image) }}" id="image"/>
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <a class="btn btn-success" href="{{route('admin.server.index')}}">Quay lại</a>
            <input type="submit" class="btn btn-primary" value="Submit" />
        </div>           
    </form>
</div>
</div>
@stop
@section('script_close')
    <script src="{{ asset('admins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('admins/ckeditor/adapters/jquery.js') }}"></script>
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
        $('[name="image"]').change(function(){
        readURL(this);
    });
    </script>
@stop
