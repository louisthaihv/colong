@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Hạng mục / Xem </h1>
</div>
@include('admin.error-message')
<table class="table">
      <tr>
        <th> ID: </th>
        <td> {{ $category->id }} </td>
      </tr>
      <tr>
        <th> TÊN: </th>
        <td> {!! $category->name !!} </td>
      </tr>
      <tr>
        <th> CHI TIÊT: </th>
        <td> {!! $category->description !!}</td>
      </tr>
      <tr>
        <th> LOẠI: </th>
        <td> {!! $category->type !!}</td>
      </tr>
      <tr>
        <th> TRẠNG THÁI: </th>
        <td> {!! $category->status !!}</td>
      </tr>
      <tr>
        <th> ẢNH: </th>
        <td> <img src="{{ asset($category->image_url) }}" /> </td>
      </tr>
</table>
<a class="btn btn-default" href="{{ route('admin.categories.index') }}">Quay lại</a>
<a class="btn btn-warning" href="{{ route('admin.categories.edit', $category->id) }}">Sửa</a>
<form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Xóa</button></form>
@endsection
