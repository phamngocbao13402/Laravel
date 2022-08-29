@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h5 class=""><i class="fa fa-home"></i>/ Quảng cáo/ Cập nhật</h5>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-7" style="margin: 0 auto">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Cập nhật Quảng cáo</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="http://localhost:8000/admin/ads_update/{{$adsList->ads_id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên Quảng cáo:</label>
                                <input class="form-control" type="text" placeholder="Nhập tiêu đề Quảng cáo" value="{{$adsList->ads_name}}"
                                    name="ads_name">
                            </div>
                            <div class="form-group">
                                <label>Đường dẫn:</label>
                                <input class="form-control" type="text" placeholder="Nhập mô tả Quảng cáo" value="{{$adsList->ads_link}}"
                                    name="ads_link">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện:</label>
                                <div class="input-group-icon right">
                                    <input type="hidden" name="image_old" value="{{$adsList->ads_image}}">
                                    <input class="form-control" type="file" name="image_new" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái:</label> <br>
                                @if($adsList->ads_status == 1)
                                <label class="ui-radio ui-radio-success">
                                    <input type="radio" name="ads_status" value="1" checked>
                                    <span class="input-span"></span>Hoạt động</label>
                                <label class="ui-radio ui-radio-danger">
                                    <input type="radio" name="ads_status" value="0">
                                    <span class="input-span"></span>Vô hiệu hoá</label>
                                    @else
                                <label class="ui-radio ui-radio-success">
                                    <input type="radio" name="ads_status" value="1" >
                                    <span class="input-span"></span>Hoạt động</label>
                                <label class="ui-radio ui-radio-danger">
                                    <input type="radio" name="ads_status" value="0" checked>
                                    <span class="input-span"></span>Vô hiệu hoá</label>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Vị trí:</label>
                                
                                    @if($adsList->ads_location = 0)
                                    <select class="form-control" name="ads_location">                                    
                                        <option value="0" selected>Trên</option>
                                        <option value="1">Giữa</option>
                                        <option value="2">Dưới</option>
                                    </select>
                                    @elseif($adsList->ads_location = 1)
                                    <select class="form-control" name="ads_location">                                    
                                        <option value="0">Trên</option>
                                        <option value="1" selected>Giữa</option>
                                        <option value="2">Dưới</option>
                                    </select>
                                    @else
                                    <select class="form-control" name="ads_location">                                    
                                        <option value="0">Trên</option>
                                        <option value="1">Giữa</option>
                                        <option value="2" selected>Dưới</option>
                                    </select>
                                    @endif
                               
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
</div>
<!-- END PAGE CONTENT-->
@include('admin._footer')
</div>
</div>
@endsection('noidung')