@extends('layouts.admin')

@section('content')
@include('admin.error-message')
    <div class="page-header">
        <h1>Thành viên / Sửa </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
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
                                    <input class="form-control" type="text" name = "name" value="{!! $user->name !!}" required>
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
                                <input class="form-control" type="text" name = "phone" value="{{ $user->phone }}" required>
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
                        @if(Auth::user()->role_id == ADMIN)
                            <tr>
                                <td>QUYÊN</td>
                                <td>
                                    <div class="form-group col-md-5 col-sm-5">
                                      <select class="form-control" required name="role_id">
                                            @foreach($roles as $role)
                                                <option value = "{{ $role->id }}" <?php if($role->id == $user->role->id){echo "selected";} ?>>{{ $role->name }}</option>
                                            @endforeach
                                      </select>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        @if(Auth::user()->role_id ==ADMIN)
                            <tr>
                                <td>TRẠNG THÁI</td>
                                <td>
                                    <div class="form-group col-md-5 col-sm-5">
                                    <select class="form-control" required name ="status">
                                        <option value = "0" <?php if($user->status == ENABLE){echo "selected";} ?>>{{ ENABLE_STRING }} </option>
                                        <option value = "1" <?php if($user->status == DISABLE){echo "selected";} ?>>{{ DISABLE_STRING }} </option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                  </table>
            <a class="btn btn-default" href="{{ route('admin.users.index') }}">Quay lại</a>
            <button class="btn btn-primary" type="submit" >Lưu</a>
            </form>
        </div>
    </div>


@endsection