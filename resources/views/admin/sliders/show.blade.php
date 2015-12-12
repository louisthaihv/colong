@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Ảnh môn phái / Xem </h1>
</div>
@include('admin.error-message')
<table class="table">
      <tr>
        <th> ID: </th>
        <td> {{ $slider->id }} </td>
      </tr>
      <tr>
        <th> TIÊU ĐÊ: </th>
        <td> {!! $slider->title !!} </td>
      </tr>
      <tr>
        <th> ẢNH: </th>
        <td> <img src="{{ asset($slider->image_url) }}" /> </td>
      </tr>
</table>
<a class="btn btn-default" href="{{ route('admin.sliders.index') }}">Quay lại</a>
<a class="btn btn-warning" href="{{ route('admin.sliders.edit', $slider->id) }}">Sửa</a>
<form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Xóa</button></form>
@endsection
