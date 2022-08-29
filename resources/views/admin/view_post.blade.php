@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-8" style="max-width: 100%; flex: 0 0 100% !important">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">DANH MỤC</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>                    
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
										<tr>
											<th></th>
											<th>STT</th>
											<th>ID</th>
											<th>Tiêu đề</th>
                                            <!-- <th>Tóm tắt</th> -->
                                            <!-- <th>Tiêu đề</th> -->
                                            <th>Ảnh đại diện</th>
                                            <th>Ngày đăng</th>
                                            <th>Lượt xem</th>
                                            <th>Thẻ</th>
                                            <th>Danh mục</th>
                                            <th>Tác giả</th>
											<th>Trạng thái</th>
											<th colspan='2' style="text-align:center;">Hành động</th>
										</tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1?>
                                    @foreach($postList as $item)
										<tr>
										<td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
											<td>{{$i++}}</td>
											<td class="d-none d-xl-table-cell">{{$item->post_id}}</td>
											<td class="d-none d-xl-table-cell" style="width:20%;">{{$item->post_title}}</td>                
                                            <td class="d-none d-xl-table-cell">  <img src="{{asset('assets/img/news/')}}/{{$item->post_image}}" alt="" width="100px" height="100px"></td>
                                            <td class="d-none d-xl-table-cell">{{$item->post_date}}</td>
                                            <td class="d-none d-xl-table-cell">{{$item->post_view}}</td>
                                            <td class="d-none d-xl-table-cell">{{$item->post_tag}}</td>
                                            <td class="d-none d-xl-table-cell">{{$item->category_name}}</td>
                                            <td class="d-none d-xl-table-cell">{{$item->name}}</td>
											@if($item->post_status==1)
                                                <td><span class="badge bg-success">Đang hoạt động</span></td>
                                             @else
                                                <td><span class="badge bg-danger">Vô hiệu hoá</span></td>                                           
                                            @endif
											<td class="" style="text-align:center; padding-left: 0.2rem;padding-right: 0.2rem;"><a href="http://localhost:8000/admin/post_update/{{$item->post_id}}"><button class="btn btn-primary"><i class="sidebar-item-icon fa fa-edit"></i></button></a></td>
                                            <td class="" style="text-align:center;padding-left: 0.2rem;padding-right: 0.2rem;"><a href="http://localhost:8000/admin/post/delete/{{$item->post_id}}"><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
										</tr>
                                    @endforeach
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>
                 @include('admin._footer')
            </div>
            <!-- END PAGE CONTENT-->
           
        </div>
    </div>
 @endsection('noidung')