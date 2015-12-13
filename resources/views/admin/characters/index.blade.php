@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Characters</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TÊN </th>
                        <th> User </th>
                        <th> Server </th>
                        <th> Clan </th>
                        <th> Level </th>
                        <th> TRẠNG THÁI </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($chars as $char)
                <tr>
                    <td>{{ $char->id }}</td>
                    <td> {!! $char->name !!} </td>
                    <td> 
                        {!! $char->user->username  !!}
                    </td>
                    <td> {!! $char->server->name !!} </td>
                    <td> {!! $char->clan->name !!} </td>
                    <td> {!! $char->level !!} </td>
                    <td> 
                        @if($char->status == 1)
                            {{ "actived" }}
                        @else
                            {{ "none" }}
                        @endif
                     </td>
                    <td class="text-right">
                        <a class="btn btn-warning " href="{{ route('admin.character.edit', $char->id) }}">Sửa</a>
                        <form action="{{ route('admin.character.destroy', $char->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <center>{{ $chars->appends(Request::except('page'))->render() }}</center>
    </div>
@endsection