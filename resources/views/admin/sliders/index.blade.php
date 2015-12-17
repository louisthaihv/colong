@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Ảnh slider dưới</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.sliders.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TIÊU ĐÊ </th>
                        <th> ẢNH </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td> {{ $slider->id }} </td>
                    <td> {!! $slider->title !!} </td>
                    <td> <img src="{{ asset($slider->image_url) }}" width="90" height="70"/> </td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.sliders.show', $slider->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.sliders.edit', $slider->id) }}">Sửa</a>
                        <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.sliders.create') }}">Tạo mới</a>
        </div>
        <center>{{ $sliders->appends(Request::except('page'))->render() }}</center>
    </div>
@endsection