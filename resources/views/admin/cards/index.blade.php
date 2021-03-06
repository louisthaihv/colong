@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Thẻ</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.cards.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TÊN </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($cards as $card)
                <tr>
                    <td> {{ $card->id }} </td>
                    <td> {!! $card->name !!} </td>
                    <td class="text-right">
                        <a class="btn btn-warning " href="{{ route('admin.cards.edit', $card->id) }}">Sửa</a>
                        <form action="{{ route('admin.cards.destroy', $card->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.cards.create') }}">Tạo mới</a>
        </div>
        <center>{!! $cards->appends(Request::except('page'))->render() !!}</center>
    </div>
@endsection