@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="page-header">
    <h1>Sự kiện / Xem </h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NGÀY</th>
        <th>TÊN</th>
        <th>THƠÌ GIAN</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>{{ $event->id }}</td>
        <td>{!! $event->weekly->name !!}</td>
        <td>{!! $event->name !!} </td>
        <td>{!! $event->start_time.'h - '.$event->end_time.'h' !!}</td>
      </tr>
    </tbody>
</table>
<a class="btn btn-default" href="{{ route('admin.events.index') }}">Quay lại</a>
<a class="btn btn-warning" href="{{ route('admin.events.edit', $event->id) }}">Sửa</a>
@endsection
