@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Thành viên</h1>
    </div>
@include('admin.error-message')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TÊN</th>
                        <th>EMAIL</th>
                        <th>SĐT</th>
                        <th>ĐIA CHỈ</th>
                        <th>QUYÊN</th>
                        <th>NGÀY SINH</th>
                        <th class="text-lef">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <a href = "{{ route('admin.users.show', $user->id) }}">
                            {{$user->name}}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{!! $user->address !!}</td>
                    <td>{!! $user->role->name !!}</td>
                    <td>{{ $user->birthday }}</td>
                    <td class="text-left">
                        <a class="btn btn-primary" href="{{ route('admin.users.show', $user->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.users.edit', $user->id) }}">Sửa</a>
                        @if(Auth::user()->role_id == ADMIN && Auth::user()->id != $user->id)
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                        @endif
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.users.create') }}">Tạo mới</a>
        </div>
        <center>{!! $users->appends(Request::except('page'))->render() !!}</center>
    </div>
@endsection