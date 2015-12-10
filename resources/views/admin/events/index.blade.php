@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Sự kiện hàng ngày</h1>
    </div>
@include('admin.error-message')
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.events.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NGÀY</th>
                        <th>TÊN</th>
                        <th>THƠÌ GIAN</th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{!! $event->weekly->name !!}</td>
                    <td>{!! $event->name !!}</td>
                    <td>{!! $event->start_time .'h - '.$event->end_time .'h' !!}</td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.events.show', $event->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.events.edit', $event->id) }}">Sửa</a>
                         <form action="{{ route('admin.events.destroy',['$event_id'=>$event->id]) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class = "btn btn-danger" value="Xóa" />
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <center>{!! $events->appends('page')->render() !!}</center>
@endsection