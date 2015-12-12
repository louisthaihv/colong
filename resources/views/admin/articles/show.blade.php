@extends('layouts.admin')

@section('content')
<div id="content">
@include('admin.error-message')
    <div class="page-header">
        <h1> CHI TIÊT </h1>
    </div>
    <div class="form-group col-sm-4 col-md-8">
        <label>MỤC:</label>
        {!! $article->category->name !!}
    </div>
    <div class="form-group col-sm-4 col-md-8">
        <label>NGƯƠÌ TẠO:</label>
        {!! $article->user->name !!}
    </div>
    <div class="form-group col-sm-4 col-md-8">
        <label>TIÊU ĐÊ:</label>
        {!! $article->title !!}
    </div>
    <div class="form-group col-sm-4 col-md-8">
        <label for="content">NÔỊ DUNG:</label>
        <textarea name="content" class = "form-control" id="editor1">{!! $article->content !!}</textarea>
    </div>
    <div class="form-group col-sm-4 col-md-8">
        <label>TRẠNG THÁI:</label>
        @if($article->status == 1)
            {{ 'Hiện' }}
        @else
            {{ 'Ân' }}
        @endif
    </div>
    <div class="form-group col-sm-4 col-md-8">
        <label>ẢNH:</label>
        <img src="{{ asset($article->image_url) }}" />
    </div>
    <div class="form-group col-sm-4 col-md-8"> 
        <a class="btn btn-default" href="{{ route('admin.articles.index') }}"> Quay lại </a>
        <a class="btn btn-warning" href="{{ route('admin.articles.edit', $article->id) }}">Sửa</a>
        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Xoá sản phẩm?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Xóa</button></form>
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
        $('[name="image_url"]').change(function(){
        readURL(this);
    });
    </script>
@stop