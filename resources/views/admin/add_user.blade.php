@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h5 class=""><i class="fa fa-home"></i>/ Người dùng/ Thêm mới</h5>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-7" style="margin: 0 auto">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Thêm Người dùng</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="http://localhost:8000/admin/user_add" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label>Tên người dùng:</label>
                                        <input class="form-control" type="text" placeholder="Nhập tên người dùng" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ Email:</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Địa chỉ email" name="email">
                                            <div class="input-group-addon">@example.com</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu:</label>
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                            <input class="form-control" type="password" placeholder="Mật khẩu" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái:</label> <br>
                                        <label class="ui-radio ui-radio-success">
                                            <input type="radio" name="user_status" value="1">
                                            <span class="input-span"></span>Hoạt động</label>
                                        <label class="ui-radio ui-radio-danger">
                                            <input type="radio" name="user_status" value="0">
                                            <span class="input-span"></span>Vô hiệu hoá</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Vai trò</label>
                                        <select class="form-control" name="user_role">
                                            <option value="0">Đọc giả</option>
                                            <option value="1">Quản trị viên</option>
                                            <!-- <option value="">option 3</option> -->
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Default input</label>
                                        <input class="form-control" type="text" placeholder="Default input">
                                    </div>
                                    <div class="form-group">
                                        <label>Rounded input</label>
                                        <input class="form-control input-rounded" type="text" placeholder="Rounded input">
                                    </div>
                                    <div class="form-group">
                                        <label>With Help text</label>
                                        <input class="form-control" type="text" placeholder="With Help text">
                                        <span class="help-block">This is some placeholder block-level help text for the above input.</span>
                                    </div>
                                    <h4>Input Groups</h4>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="email" placeholder="input group">
                                            <div class="input-group-addon">@example.com</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon bg-white">$</div>
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-addon bg-white">.00</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-lock font-16"></i></div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <input type="checkbox">
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <input type="radio">
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <h4>Input Button Groups</h4>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-info" type="button">Go!</button>
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item">option 1</a>
                                                    <a class="dropdown-item">option 2</a>
                                                </ul>
                                            </div>
                                            <input class="form-control" type="text" placeholder="input group">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item">option 1</a>
                                                    <a class="dropdown-item">option 2</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="input group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-info" type="button">Action</button>
                                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item">option 1</a>
                                                    <a class="dropdown-item">option 2</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>With Icons</h4>
                                    <div class="form-group">
                                        <div class="input-group-icon">
                                            <div class="input-icon"><i class="fa fa-link"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon">
                                            <div class="input-icon"><i class="fa fa-keyboard-o"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon">
                                            <div class="input-icon"><i class="fa fa-microphone text-primary font-15"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-eye"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="fa fa-check text-success"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-icon right">
                                            <div class="input-icon"><i class="icon-cancel text-danger"></i></div>
                                            <input class="form-control" type="text" placeholder="with icon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Disabled</label>
                                        <input class="form-control" type="text" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label>Static control</label>
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Multiple Select</label>
                                        <select class="form-control" multiple="">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                            <option value="">option 4</option>
                                            <option value="">option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>textarea</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Checkboxes & Radios</label>
                                        <div class="row">
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Checkbox</label>
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Checkbox</label>
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox" checked="">
                                                        <span class="input-span"></span>Checked</label>
                                                    <label class="ui-checkbox ui-checkbox-gray">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Checkbox gray</label>
                                                    <label class="ui-checkbox disabled">
                                                        <input type="checkbox" disabled="">
                                                        <span class="input-span"></span>Disabled</label>
                                                </div>
                                            </div>
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-checkbox ui-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Primary</label>
                                                    <label class="ui-checkbox ui-checkbox-success">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Success</label>
                                                    <label class="ui-checkbox ui-checkbox-info">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Info</label>
                                                    <label class="ui-checkbox ui-checkbox-warning">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Warning</label>
                                                    <label class="ui-checkbox ui-checkbox-danger">
                                                        <input type="checkbox">
                                                        <span class="input-span"></span>Danger</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-radio">
                                                        <input type="radio" name="test">
                                                        <span class="input-span"></span>Radio</label>
                                                    <label class="ui-radio">
                                                        <input type="radio" name="test">
                                                        <span class="input-span"></span>Radio</label>
                                                    <label class="ui-radio">
                                                        <input type="radio" name="test" checked="">
                                                        <span class="input-span"></span>Checked</label>
                                                    <label class="ui-radio ui-radio-gray">
                                                        <input type="radio" name="test">
                                                        <span class="input-span"></span>Radio Gray</label>
                                                    <label class="ui-radio disabled">
                                                        <input type="radio" name="test" disabled="">
                                                        <span class="input-span"></span>Disabled</label>
                                                </div>
                                            </div>
                                            <div class="col-6 m-b-20">
                                                <div class="check-list">
                                                    <label class="ui-radio ui-radio-primary">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Primary</label>
                                                    <label class="ui-radio ui-radio-success">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Success</label>
                                                    <label class="ui-radio ui-radio-info">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Info</label>
                                                    <label class="ui-radio ui-radio-warning">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Warning</label>
                                                    <label class="ui-radio ui-radio-danger">
                                                        <input type="radio" name="test2">
                                                        <span class="input-span"></span>Danger</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Inline Checkboxes</label>
                                        <div class="m-b-10">
                                            <label class="ui-checkbox ui-checkbox-inline">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Option 1</label>
                                            <label class="ui-checkbox ui-checkbox-inline">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Option 2</label>
                                            <label class="ui-checkbox ui-checkbox-inline">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Option 3</label>
                                        </div>
                                        <div>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Option 1</label>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Option 2</label>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Option 3</label>
                                        </div>
                                    </div>--}}
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Thêm mới</button>
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