@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>CHARACTER / EDIT </h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    
        <div class="col-md-12">
            <form action="{{ route('admin.character.update', $char->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Trạng thái: </td>
                        <td>
                            <select name="status">
                                <option value="1" <?php if($char->status ==1){echo "selected";}?>>Active</option>
                                <option value="0" <?php if($char->status ==0){echo "selected";}?>>None</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                  </table>
            <a class="btn btn-default" href="{{ route('admin.character.index') }}">Quay lại</a>
            <button class="btn btn-primary" type="submit" >Lưu</a>
            </form>
        </div>
    </div>
@endsection
@section('script_close')

@stop