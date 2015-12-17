@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Môn phái</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.clans.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TÊN </th>
                        <th> MIÊU TẢ </th>
                        <th> ẢNH </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($clans as $clan)
                <tr>
                    <td> {{ $clan->id }} </td>
                    <td> {!! $clan->name !!} </td>
                    <td width="40%"> {!! $clan->description !!} </td>
                    <td> 
                        <img src="{{ asset($clan->image_url) }}" width="90" height="70"/>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.clans.show', $clan->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.clans.edit', $clan->id) }}">Sửa</a>
                        <form action="{{ route('admin.clans.destroy', $clan->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.clans.create') }}">Tạo mới</a>
        </div>
        <center>{!! $clans->appends(Request::except('page'))->render() !!}</center>
    </div>
@endsection