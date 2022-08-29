@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h5 class=""><i class="fa fa-home"></i>/ Quảng cáo/ Thêm mới</h5>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-7" style="margin: 0 auto">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm Quảng cáo</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="http://localhost:8000/admin/ads_add" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên Quảng cáo:</label>
                                <input class="form-control" type="text" placeholder="Nhập tên Quảng cáo"
                                    name="ads_name">
                            </div>
                            <div class="form-group">
                                <label>Đường dẫn:</label>
                                <input class="form-control" type="text" placeholder="Nhập tên Quảng cáo"
                                    name="ads_link">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh:</label>
                                <div class="input-group-icon right">
                                    <input class="form-control" type="file" name="ads_image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái:</label> <br>
                                <label class="ui-radio ui-radio-success">
                                    <input type="radio" name="ads_status" value="1">
                                    <span class="input-span"></span>Hoạt động</label>
                                <label class="ui-radio ui-radio-danger">
                                    <input type="radio" name="ads_status" value="0">
                                    <span class="input-span"></span>Vô hiệu hoá</label>
                            </div>
                            <div class="form-group">
                                <label>Vị trí:</label>
                                <select class="form-control" name="ads_location">                                    
                                    <option value="0">Trên</option>
                                    <option value="1">Giữa</option>
                                    <option value="2">Dưới</option>
                                </select>
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
</div>
<!-- END PAGE CONTENT-->
@include('admin._footer')
</div>
</div>
@endsection('noidung')