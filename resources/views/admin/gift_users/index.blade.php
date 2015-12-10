@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Quà tặng & Người chơi</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.giftUser.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> EMAIL </th>
                        <th> MÃ CODE</th>
                        <th> MÔ TẢ </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($gift_users as $gift_user)
                <tr>
                    <td>{{ $gift_user->id }} </td>
                    <td><a href="{{ route('admin.users.show', $gift_user->user->id) }}"> {{ $gift_user->user->email }} </a></td>
                    <td>  {!! $gift_user->gift->code !!} </td>
                    <td> {!! $gift_user->gift->description !!} </td>
                    <td class="text-right">
                        <a class="btn btn-warning " href="{{ route('admin.giftUser.edit', $gift_user->id) }}">Sửa</a>
                        <form action="{{ route('admin.giftUser.destroy', $gift_user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.giftUser.create') }}">Tạo mới</a>
        </div>
        <center>{{ $gift_users->appends(Request::except('page'))->render() }}</center>
    </div>
@endsection