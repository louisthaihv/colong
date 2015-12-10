@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Môn phái / Xem </h1>
</div>
@include('admin.error-message')
<table class="table">
      <tr>
        <th> ID: </th>
        <td> {{ $clan->id }} </td>
      </tr>
      <tr>
        <th> TÊN: </th>
        <td> {!! $clan->name !!} </td>
      </tr>
      <tr>
        <th> MÔ TẢ: </th>
        <td> {!! $clan->description !!} </td>
      </tr>
      <tr>
        <th> ẢNH NHỎ: </th>
        <td> <img src="{{ asset($clan->title_url) }}" /> </td>
      </tr>
      <tr>
        <th> ẢNH Slide: </th>
        <td> <img src="{{ asset($clan->slide_url) }}" /> </td>
      </tr>
      <tr>
        <th> ẢNH NÊN: </th>
        <td><img src="{{ asset($clan->back_ground_image_url) }}" /> </td>
      </tr>
</table>
<a class="btn btn-default" href="{{ route('admin.clans.index') }}">Quay lại</a>
<a class="btn btn-warning" href="{{ route('admin.clans.edit', $clan->id) }}">Sửa</a>
<form action="{{ route('admin.clans.destroy', $clan->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Xóa</button></form>
@endsection
