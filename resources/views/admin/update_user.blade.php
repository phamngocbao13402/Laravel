@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h5 class=""><i class="fa fa-home"></i>/ Người dùng/ Cập nhật</h5>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-7" style="margin: 0 auto">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Cập nhật Người dùng</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="http://localhost:8000/admin/user_update/{{$users->id}}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label>Tên người dùng:</label>
                                        <input class="form-control" type="text" placeholder="Nhập tên người dùng" name="name" value="{{$users->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ Email:</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Địa chỉ email" name="email" value="{{$users->email}}">
                                            <div class="input-group-addon">@example.com</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu:</label>
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                            <input class="form-control" type="password" placeholder="Mật khẩu" name="password" value="{{$users->password}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái:</label> <br>
                                        @if($users->user_status==0)
                                        <label class="ui-radio ui-radio-success">
                                            <input type="radio" name="user_status" value="1">
                                            <span class="input-span"></span>Hoạt động</label>
                                        <label class="ui-radio ui-radio-danger">
                                            <input type="radio" name="user_status" checked value="0">
                                            <span class="input-span"></span>Vô hiệu hoá</label>
                                        @else
                                        <label class="ui-radio ui-radio-success">
                                            <input type="radio" name="user_status" checked value="1">
                                            <span class="input-span"></span>Hoạt động</label>
                                        <label class="ui-radio ui-radio-danger">
                                            <input type="radio" name="user_status" value="0">
                                            <span class="input-span"></span>Vô hiệu hoá</label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Vai trò</label>
                                        <select class="form-control" name="user_role">
                                        @if($users->user_role==0)
                                            <option value="0" selected>Đọc giả</option>
                                            <option value="1">Quản trị viên</option>
                                        @else
                                            <option value="0">Đọc giả</option>
                                            <option value="1" selected>Quản trị viên</option>
                                        @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            @include('admin._footer')
        </div>
    </div>
 @endsection('noidung')