@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Sự kiện / Sửa </h1>
    </div>
@include('admin.error-message')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.events.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table">
                    <tbody>
                        <tr>
                            <td> NGÀY: </td>
                            <td>
                                <select name="weekly_id" class="form-control">
                                @foreach($weeks as $week)
                                    <option value="{{ $week->id }}"
                                    >
                                        {!! $week->name !!}
                                    </option>
                                @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> TÊN: </td>
                            <td>
                                <textarea name = "name" id = "editor1"></textarea>
                            </td>
                        </tr>
                        <tr class="success">
                            <td>BĂT ĐÂÙ: </td>
                            <td><input name="start_time" value="" class="form-control" placeholder="0,1,2..." /></td>
                        </tr>
                        <tr class="success">
                            <td> KÊT THÚC: </td>
                            <td><input name="end_time" value="" class="form-control" placeholder="3,4,5..." /></td>
                        </tr>
                    </tbody>
                  </table>
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">Quay lại</a>
                <button class="btn btn-primary" type="submit" >Lưu</a>
            </form>
        </div>
    </div>
@endsection
@section('script_close')
    <script src="{{ asset('admins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('admins/ckeditor/adapters/jquery.js') }}"></script>
    @include('admin.script')
@stop