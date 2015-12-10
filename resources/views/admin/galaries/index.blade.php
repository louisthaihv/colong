@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h1>Ảnh lớn</h1>
    </div>
    <div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
            <a href="{{ route('admin.galaries.create') }}" class="btn btn-info">Tạo mới</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> TIÊU ĐÊ </th>
                        <th> ẢNH </th>
                        <th> ĐƯỜNG DẪN: </th>
                        <th> TRẠNG THÁI </th>
                        <th class="text-right">LƯẠ CHỌN</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($galaries as $galary)
                <tr>
                    <td> {{ $galary->id }} </td>
                    <td> {{ $galary->title }} </td>
                    <td> <img src="{{ asset($galary->image_url) }}" width="90" height="70"/> </td>
                    <td> <input name="{{ asset($galary->link_galaries)}}" type="text" value="{{ asset($galary->link_galaries) }}" class="form-control" /></td>
                    
                    <td>
                        Hiện
                            <input type="radio" readonly="true" <?php 
                                if($galary->status == 1){
                                    echo "checked";
                                }else{
                                    echo"disabled";
                                }
                            ?>> 
                            &nbsp;Ân
                            <input type="radio" readonly="true"  <?php 
                                if($galary->status == 0){
                                    echo "checked";
                                }else{
                                    echo"disabled";
                                }
                            ?>>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.galaries.show', $galary->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.galaries.edit', $galary->id) }}">Sửa</a>
                        <form action="{{ route('admin.galaries.destroy', $galary->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            
            <a class="btn btn-success" href="{{ route('admin.galaries.create') }}">Tạo mới</a>
        </div>
        <center>{{ $galaries->appends(Request::except('page'))->render() }}</center>
    </div>
@endsection