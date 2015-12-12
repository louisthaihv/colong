@extends('layouts.admin')
@section('content')
<div class="page-header">
    <h1>Ảnh Popup</h1>
</div>
<div class="row">
    @include('admin.error-message')
    <div class="col-xs-12 col-sm-6 col-md-7.5">
        <a href="{{ route('admin.popups.create') }}" class="btn btn-info">Tạo mới</a>
    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> ẢNH </th>
                    <th> TRẠNG THÁI </th>
                    <th class="text-right">LƯẠ CHỌN</th>
                </tr>
            </thead>

            <tbody>
                @foreach($popups as $popup)
                <tr>
                    <td> {{ $popup->id }} </td>
                    <td> <img src="{{ asset($popup->image_url) }}" width="90" height="70"/> </td>

                    <td>
                        ĐƯỜNG DẪN: 
                    </td>
                    <td>
                        <input name="link_popup" type="text" value="{{ asset($popup->link_popup) }}" class="form-control" />
                    </td>

                    <td>
                        Hiện
                        <input type="radio" <?php 
                               if($popup->status == 1){
                               echo "checked";
                               }else{
                               echo"disabled";
                               }
                               ?>> 
                               &nbsp;Ân
                               <input type="radio" <?php 
                               if($popup->status == 0){
                               echo "checked";
                               }else{
                               echo"disabled";
                               }
                               ?>>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.popups.show', $popup->id) }}">Xem</a>
                        <a class="btn btn-warning " href="{{ route('admin.popups.edit', $popup->id) }}">Sửa</a>
                        <form action="{{ route('admin.popups.destroy', $popup->id) }}" method="POST" style="display: inline;" onsubmit="if (confirm('Delete? Are you sure?')) {
                                    return true
                                } else {
                                    return false
                                }
                                ;"><input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Xóa</button></form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        <a class="btn btn-success" href="{{ route('admin.popups.create') }}">Tạo mới</a>
    </div>
    <center>{{ $popups->appends(Request::except('page'))->render() }}</center>
</div>
@endsection