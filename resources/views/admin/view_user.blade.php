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
									<tr> <th></th>
											<th>STT</th>
											<th>ID Thành viên</th>
											<th>Tên Thành viên</th>
                                            <th>Email Thành viên</th>
                                            <th>Vai trò Thành viên</th>
											<th>Trạng thái</th>
											<th class="d-none d-md-table-cell" colspan='2' style="text-align:center;">Hành động</th>
										</tr>
                                    </thead>
                                    <tbody>
									<?php $i=1?>
                                    @foreach($usersList as $item)
										<tr>
										<td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
											<td>{{$i++}}</td>
											<td>{{$item->id}}</td>
											<td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            @if($item->user_role==0)
                                                <td>Đọc giả</td>
                                            @else
                                                <td>Quản trị viên</td>
                                            
                                            @endif
											@if($item->user_status==1)
                                                <td><span class="badge bg-success">Đang hoạt động</span></td>
                                             @else
                                                <td><span class="badge bg-danger">Vô hiệu hoá</span></td>
                                            
                                            @endif
                                           
                                            <td class="" style="text-align:center; padding-left: 0.2rem;padding-right: 0.2rem;"><a href="http://localhost:8000/admin/user_update/{{$item->id}}"><button class="btn btn-primary"><i class="sidebar-item-icon fa fa-edit"></i></button></a></td>
                                            <td class="" style="text-align:center;padding-left: 0.2rem;padding-right: 0.2rem;"><a href="http://localhost:8000/admin/user/delete/{{$item->id}}"><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
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
                
            </div>
            <!-- END PAGE CONTENT-->
            @include('admin._footer')
        </div>
    </div>
 @endsection('noidung')