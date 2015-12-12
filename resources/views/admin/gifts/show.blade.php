@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Ảnh popup / Xem </h1>
</div>
@include('admin.error-message')
<table class="table">
      <tr>
        <th> ID: </th>
        <td> {{ $popup->id }} </td>
      </tr>
      <tr>
        <th> ẢNH: </th>
        <td> <img src="{{ asset($popup->image_url) }}" /> </td>
      </tr>
      <tr>
	        <th> TRẠNG THÁI: </th>
		    <td>
		        Hiện
		            <input type="radio" name="status" value="1" <?php 
		                if($popup->status == 1){
		                    echo "checked";
		                }
		            ?>> 
		            &nbsp;Ân
		            <input type="radio" name="status" value="0" <?php 
		                if($popup->status == 0){
		                    echo "checked";
		               }else{
                        	echo"disabled";
                    	}
		            ?>>
		    </td>
      </tr>
</table>
<a class="btn btn-default" href="{{ route('admin.popups.index') }}">Quay lại</a>
<a class="btn btn-warning" href="{{ route('admin.popups.edit', $popup->id) }}">Sửa</a>
<form action="{{ route('admin.popups.destroy', $popup->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Xóa</button></form>
@endsection
