@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h5 class=""><i class="fa fa-home"></i>/ Danh Mục/ Cập nhật</h5>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-7" style="margin: 0 auto">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Cập nhật Danh Mục</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="http://localhost:8000/admin/category_update/{{$categories->category_id}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên danh mục:</label>
                                        <input class="form-control" type="text" placeholder="Nhập tên danh mục" name="category_name" value="{{$categories->category_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái:</label> <br>
                                            @if($categories->category_status == 1)
                                                <label class="ui-radio ui-radio-success">
                                                    <input type="radio" name="category_status" value="1" checked>
                                                    <span class="input-span"></span>Hoạt động</label>
                                                <label class="ui-radio ui-radio-danger">
                                                    <input type="radio" name="category_status" value="0">
                                                    <span class="input-span"></span>Vô hiệu hoá</label>
                                                    @else
                                                <label class="ui-radio ui-radio-success">
                                                    <input type="radio" name="category_status" value="1" >
                                                    <span class="input-span"></span>Hoạt động</label>
                                                <label class="ui-radio ui-radio-danger">
                                                    <input type="radio" name="category_status" value="0" checked>
                                                    <span class="input-span"></span>Vô hiệu hoá</label>
                                            @endif
                                    </div>
                                    
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