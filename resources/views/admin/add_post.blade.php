@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h5 class=""><i class="fa fa-home"></i>/ Bài viết/ Thêm mới</h5>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-7" style="margin: 0 auto">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm Bài viết</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="http://localhost:8000/admin/post_add" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tiêu đề Bài viết:</label>
                                <input class="form-control" type="text" placeholder="Nhập tên Bài viết"
                                    name="post_title">
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt:</label>
                                <input class="form-control" type="text" placeholder="Nhập mô tả Bài viết"
                                    name="post_summary">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện:</label>
                                <div class="input-group-icon right">
                                    <input class="form-control" type="file" name="post_image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ngày đăng:</label>
                                <div class="input-group-icon right">
                                    <input class="form-control" type="date" name="post_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái:</label> <br>
                                <label class="ui-radio ui-radio-success">
                                    <input type="radio" name="post_status" value="1">
                                    <span class="input-span"></span>Hoạt động</label>
                                <label class="ui-radio ui-radio-danger">
                                    <input type="radio" name="post_status" value="0">
                                    <span class="input-span"></span>Vô hiệu hoá</label>
                            </div>
                            <div class="form-group">
                                <label>Danh mục:</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categoryList as $item)
                                    <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                    @endforeach
                                    <!-- <option value="">option 3</option> -->
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label>Tác giả:</label> -->
                                <input class="form-control" type="hidden" name="user_id" value="{{ Auth::user()->id }}"
                                    readonly>
                            <!-- </div> -->
                            <div class="form-group">
                                <label>Nội dung:</label>
                                <!-- <textarea  name="post_content" cols="90" rows="5"></textarea> -->
                                <textarea id='summernote' name='post_content' class="form-control"></textarea>
                            </div>
                            <div class="ibox">
                                <!-- <div class="ibox-head">
                                    <div class="ibox-title">Nội dung:
                                        <a class="btn btn-xs btn-default m-l-5" href="http://summernote.org/" target="_blank">Official site</a>
                                    </div>
                                </div> -->
                                <div class="ibox-body">
                                    <!-- <div id="summernote" data-plugin="summernote" data-air-mode="true" name="post_content"></div> -->
                                    <!-- <textarea id="summernote" name="post_content"></textarea> -->
                                    <!-- <input type="text" id="summernote" data-plugin="summernote" data-air-mode="true" name="post_content"> -->
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label>Nội dung:</label>
                                <input class="form-control" type="text" placeholder="Nhập nội dung" name="post_content">
                            </div> -->
                            <div class="form-group">
                                <label>Thẻ:</label>
                                <input class="form-control" type="text" placeholder="Nhập nội dung" name="post_tag">
                            </div>
                            <input type="hidden" name="post_view" value="0">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>                   
            </div>
        </div>
    </div>
    @include('admin._footer')
</div>
<!-- END PAGE CONTENT-->

</div>
</div>
@endsection('noidung')