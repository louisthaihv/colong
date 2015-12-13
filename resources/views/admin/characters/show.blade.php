@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>VÂT PHÂM / Xem </h1>
</div>
@include('admin.error-message')
<table class="table">
      <tr>
        <th> ID: </th>
        <td> {{ $item->id }} </td>
      </tr>
      <tr>
        <th> TÊN: </th>
        <td> {!! $item->name !!} </td>
      </tr>
      <tr>
        <th> SÔ LƯƠNG: </th>
        <td> {!! $item->qualtity !!} </td>
      </tr>
      <tr>
        <th> ĐÃ CÂP: </th>
        <td> {!! $item->dis_qualtity !!} </td>
      </tr>
      <tr>
        <th> TRẠNG THÁI: </th>
        <td> 
          @if($item->status == 1)
            {{ "actived" }}
          @else
            {{ "none" }}
          @endif
        </td>
      </tr>
      <tr>
        <th> ẢNH: </th>
        <td> <img src="{{ asset($item->image_url) }}" /> </td>
      </tr>
</table>
<a class="btn btn-default" href="{{ route('admin.item.index') }}">Quay lại</a>
<a class="btn btn-warning" href="{{ route('admin.item.edit', $item->id) }}">Sửa</a>
<form action="{{ route('admin.item.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Xóa</button></form>
@endsection
