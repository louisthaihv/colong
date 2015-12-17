@extends('layouts.admin')

@section('content')
@include('admin.error-message')
<div class="manage-menu">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-7.5">
			<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Tạo mới</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-1.5">
			<span>Chọn mục: </span>
		</div>
	  	<div class="col-xs-6 col-md-4">
		  	<form action="{{ route('admin.category.articles') }}" method="GET" accept-charset="utf-8">
			  	<div class="row">
		  			<div class="col-sm-10">
			  			<select name ='category_id' class="form-control">
			  				<option value="">.....</option>
	    					@foreach($categories as $category)
			  					<option value="{{ $category->id }}" <?php if($cate_id == $category->id){echo "selected";} ?>>{{ $category->name }}</option>
	    					@endforeach
	    				</select>
					</div>
			        <div class="col-sm-2">
			        	<input type="submit" id="search" class='btn btn-primary'>
			        </div>
			  	</div>
		  	</form>
	  	</div>
	</div>
	<div style="color: red">{{ $articles->total() }} articles</div>
	<table class="table table-hover" style="margin-top: 10px;">
	    <tr>
	        <th>ID</th>
	        <th>TIÊU ĐÊ</th>
	        <th>NÔỊ DUNG</th>
	        <th>TRẠNG THÁI</th>
	        <th>MỤC</th>
	        <th>NGƯƠI TẠO</th>
	        <th>ẢNH</th>
	        <th>LƯẠ CHỌN</th>
	    </tr>
	    @foreach($articles as $article)
	    	<tr>
	    	<td>{{ $article->id }}</td>
	        <td><a href="{{ route('admin.articles.show',['article_id'=>$article->id]) }}">{!!$article->title!!}</a></td>
	        <td>{!! $article->content !!}</td>
	        <td>
				@if($article->status == 1)
					{{ 'Hiện' }}
				@else
					{{ 'Ân' }}
				@endif
	        </td>
	        <td>
	        	<a href="{{ route('admin.category.articles',['category_id'=>$article->category->id]) }}">
	        	{!! $article->category->name !!}</a>
	        </td>
	        <td>{!! $article->user->name !!}</td>
	        <td>
	        	<img src="{{ asset($article->image_url) }}" with="25" height="30"/>
	        </td>
	        <td>
	            <div style=" display: table" >
			        <div style = "display: table-cell;  vertical-align: center;">
		                <a href="{{ route('admin.articles.show',['$article_id'=>$article->id]) }}" class="btn btn-info">Xem</a>
		            </div>
		            <div style = "display: table-cell;  vertical-align: center;">
		                <a href="{{ route('admin.articles.edit',['$article_id'=>$article->id]) }}" class="btn btn-warning">SƯẢ</a>
		            </div>
		            <div style = "display: table-cell;  vertical-align: center;">
		            <form action="{{ route('admin.articles.destroy',['$article_id'=>$article->id]) }}" method="POST" style="display: inline;" onsubmit="if(confirm('delete?')) { return true } else {return false };">
		            	<input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class = "btn btn-danger" value="Xóa" />
			        </form>
			         </div>
	            </div>
	        </td>
	      </tr>
		@endforeach
	</table>
    <center>{!! $articles->appends(Request::except('page'))->render() !!}</center>
</div>
@stop
