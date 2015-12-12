@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Thành viên / Xem </h1>
    </div>
@include('admin.error-message')
    <div class="row">
        <div class="col-md-12">
            <form action="#" >
                <table class="table">
                        <tbody>
                          <tr class="success">
                            <td>ID</td>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>TÊN: </td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name = "name" value="{{ $user->name }}" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="email" name = "email" value="{!! $user->email !!}" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ĐỊA CHỈ</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="TEXT" name = "address" value="{!! $user->address !!}" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>SĐT</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="text" name = "phone" value="{!! $user->phone !!}" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>NGÀY SINH</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="date" name = "birthday" value="{{ $user->birthday }}" required>
                                </div>
                            </td>
                        </tr>
                            <tr>
                                <td>QUYÊN</td>
                                <td>
                                    <div class="form-group col-md-5 col-sm-5">
                                    <input value="{!! $user->role->name !!}" class=""form-cotrol/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>TRẠNG THÁI</td>
                                <td>
                                    <div class="form-group col-md-5 col-sm-5">
                                    <input value="{!! $user->status !!}" class="form-control">
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                  </table>
            <a class="btn btn-default" href="{{ route('admin.users.index') }">Qauy lại</a>
            <a class="btn btn-warning" href="{{ route('admin.users.edit', $user->id) }}" >Sửa</a>
        </div>
    </div>


@endsection