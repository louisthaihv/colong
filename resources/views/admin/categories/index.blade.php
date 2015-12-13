@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Hạng mục</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TÊN </th>
                        <th> NÔỊ DUNG </th>
                        <th> ẢNH </th>
                        <th> KIÊỦ </th>
                        <th> TRẠNG THÁI </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td> {{ $category->id }} </td>
                    <td> {!! $category->name !!} </td>
                    <td> {!! $category->description !!} </td>
                    <td> <img src="{{ asset($category->image_url) }}" width="50" height="50"/> </td>
                    <td> {!! $category->type !!} </td>
                    <td> {!! $category->status !!} </td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.categories.show', $category->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.categories.edit', $category->id) }}">Sửa</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.categories.create') }}">Tạo mới</a>
        </div>
        <center>{!! $categories->appends(Request::except('page'))->render() !!}</center>
    </div>
@endsection