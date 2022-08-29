@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-8" style="max-width: 100%; flex: 0 0 100% !important">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">QUẢNG CÁO</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>                    
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
									<tr> <th></th>
											<th>STT</th>
											<th>Tên quảng cáo</th>
											<th>Đường dẫn</th>
                                            <th>Hình ảnh</th>
											<th>Trạng thái</th>
                                            <th>Vị trí</th>
											<th class="d-none d-md-table-cell" colspan='2' style="text-align:center;">Hành động</th>
										</tr>
                                    </thead>
                                    <tbody>
									<?php $i=1?>
                                    @foreach($adsList as $item)
										<tr>
										<td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
											<td>{{$i++}}</td>
											<td>{{$item->ads_name}}</td>
											<td>{{$item->ads_link}}</td>
                                            <td><img src="{{asset('assets/img/gallery/')}}/{{$item->ads_image}}" alt="" width="100px" ></td>
											@if($item->ads_status==1)
                                                <td><span class="badge bg-success">Đang hoạt động</span></td>
                                             @else
                                                <td><span class="badge bg-danger">Vô hiệu hoá</span></td>                                           
                                            @endif

                                            @if($item->ads_location==0)
                                                <td>Trên</td>
                                             @elseif($item->ads_location==1)
                                                <td>Giữa</td> 
                                            @else
                                                 <td>Dưới</td>                                        
                                            @endif
                                            
                                            <td class="" style="text-align:center; padding-left: 0.2rem;padding-right: 0.2rem;"><a href="http://localhost:8000/admin/ads_update/{{$item->ads_id}}"><button class="btn btn-primary"><i class="sidebar-item-icon fa fa-edit"></i></button></a></td>
                                            <td class="" style="text-align:center;padding-left: 0.2rem;padding-right: 0.2rem;"><a href="http://localhost:8000/admin/ads/delete/{{$item->ads_id}}"><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
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