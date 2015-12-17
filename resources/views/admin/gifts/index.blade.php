@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Quà tặng</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.gifts.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> GiftCode </th>
                        <th> MÔ TẢ </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($gifts as $gift)
                <tr>
                    <td> {{ $gift->id }} </td>
                    <td>{{ $gift->code }}</td>
                    <td> {!! $gift->description !!} </td>
                    <td class="text-right">
                        <a class="btn btn-warning " href="{{ route('admin.gifts.edit', $gift->id) }}">Sửa</a>
                        <form action="{{ route('admin.gifts.destroy', $gift->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.gifts.create') }}">Tạo mới</a>
        </div>
        <center>{!! $gifts->appends(Request::except('page'))->render() !!}</center>
    </div>
@endsection