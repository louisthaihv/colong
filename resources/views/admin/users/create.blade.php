@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Thành viên / Sửa </h1>
    </div>
    <div class="row">
@include('admin.error-message')
        <div class="col-md-12">
            <form action="{{ route('admin.users.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table">
                        <tbody>
                        <tr>
                            <td>TÊN: </td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name = "name" value="" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="email" name = "email" value="" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ĐỊA CHỈ</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="TEXT" name = "address" value="" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>SĐT</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="text" name = "phone" value="" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>NGÀY SINH</td>
                            <td>
                                <div class="form-group col-md-5 col-sm-5">
                                <input class="form-control" type="date" name = "birthday" value="" required>
                                </div>
                            </td>
                        </tr>
                            <tr>
                                <td>QUYÊN</td>
                                <td>
                                    <div class="form-group col-md-5 col-sm-5">
                                      <select class="form-control" required name="role_id">
                                            @foreach($roles as $role)
                                                <option value = "{{ $role->id }}" >{!! $role->name !!}</option>
                                            @endforeach
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>TRẠNG THÁI</td>
                                <td>
                                    <div class="form-group col-md-5 col-sm-5">
                                    <select class="form-control" required name ="status">
                                        <option value = "{{ DISABLE }}" selected>{{ DISABLE_STRING }} </option>
                                        <option value = "{{ ENABLE }}" >{{ ENABLE_STRING }} </option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                  </table>
            <a class="btn btn-default" href="{{ route('admin.users.index') }}">Quay lại</a>
            <button class="btn btn-primary" type="submit" >Lưu</a>
            </form>
        </div>
    </div>


@endsection