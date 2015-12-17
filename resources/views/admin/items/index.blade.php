@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Vật Phẩm</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.item.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TÊN </th>
                        <th> ẢNH </th>
                        <th> TÔNG SÔ LƯƠNG </th>
                        <th> ĐÃ CÂP </th>
                        <th> TRẠNG THÁI </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td> {!! $item->name !!} </td>
                    <td> <img src="{{ asset($item->image_url) }}" width="90" height="70"/> </td>
                    <td> {!! $item->qualtity !!} </td>
                    <td> {!! $item->dis_qualtity !!} </td>
                    <td> 
                        @if($item->status == 1)
                            {{ "actived" }}
                        @else
                            {{ "none" }}
                        @endif
                     </td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.item.show', $item->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.item.edit', $item->id) }}">Sửa</a>
                        <form action="{{ route('admin.item.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.item.create') }}">Tạo mới</a>
        </div>
        <center>{!! $items->appends(Request::except('page'))->render() !!}</center>
    </div>
@endsection