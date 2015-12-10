@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="page-header">
        <h1>Thẻ cào / Thêm mới </h1>
</div>
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.cards.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group col-sm-4 col-md-8">
            <label for="name">Name:</label>
            <input name="name" type="text" value="" class="form-control" />
        </div>
        <div class="form-group col-sm-4 col-md-8">
            <a class="btn btn-success" href="{{route('admin.cards.index')}}">Quay lại</a>
            <input type="submit" class="btn btn-primary" value="Submit" />
        </div>           
    </form>
</div>
</div>
@stop
@section('script_close')
    <script src="{{ asset('admins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('admins/ckeditor/adapters/jquery.js') }}"></script>
@stop
