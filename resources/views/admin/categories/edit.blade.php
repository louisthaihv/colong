@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Hạng mục / Sửa </h1>
    </div>
    <div class="row">
    @include('admin.error-message')
        <div class="col-md-12">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <table class="table">
                    <tbody>
                      <tr class="success">
                        <td>ID: </td>
                        <td>{{$category->id}}</td>
                    </tr>
                    <tr>
                        <td>TÊN: </td>
                        <td>
                            <input type="text" name = "name" value="{{ $category->name }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>NÔỊ DUNG: </td>
                        <td> 
                            <textarea name="description" id="editor1" required>
                                {!! $category->description !!}
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>LOẠI: </td>
                        <td>
                            <input type="text" name = "type" value="{!! $category->type !!}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>TRẠNG THÁI: </td>
                        <td>
                        <select name="status" class="form-control" id="status">
                            <option value="1" <?php if($category->status == 1){echo " selected";}?>>Hiện</option>
                            <option value="0" <?php if($category->status == 0){echo " selected";}?>>Ân</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>ẢNH: </td>
                        <td>
                            <input type="file" name = "image_url" />
                            <img src="{{ asset($category->image_url) }}" id="image"/>
                        </td>
                    </tr>
                    </tbody>
                  </table>
            <a class="btn btn-default" href="{{ route('admin.categories.index') }}">Quay lại</a>
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
        $('[name="image_url"]').change(function(){
        readURL(this);
    });
    </script>
@stop