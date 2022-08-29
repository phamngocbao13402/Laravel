@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">201</h2>
                                <div class="m-b-5">Bài viết mới</div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>25% tăng</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">1250</h2>
                                <div class="m-b-5">Lượt xem</div><i class="ti-bar-chart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>17% lượt xem</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">$1570</h2>
                                <div class="m-b-5">Doanh thu</div><i class="fa fa-money widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small>22% lượt xem</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">Người dùng mới</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="page-heading">
                    <h1 class="page-title">Lịch</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="la la-home font-20"></i></a>
                        </li>
                        <li class="breadcrumb-item">Lịch</li>
                    </ol>
                </div>
                <div class="page-content fade-in-up">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="external-events">
                                <h5 class="m-b-10">Sự kiện</h5>
                                <div class="ex-event bg-green" data-class="bg-green">Sự kiện dài</div>
                                <div class="ex-event bg-blue" data-class="bg-blue">Họp</div>
                                <div class="ex-event bg-orange" data-class="bg-orange">Tiệc sinh nhật</div>
                                <div class="ex-event bg-red" data-class="bg-red">Sự kiện cả ngày</div>
                                <div class="ex-event bg-silver" data-class="bg-silver">Nghỉ</div>
                                <p class="m-l-10 m-t-20">
                                    <label>
                                        <input class="m-r-5" id="drop-remove" type="checkbox">Loại bỏ sau khi chọn</label>
                                </p>
                                <div class="" id="new-event-modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <form class="modal-content form-horizontal" action="javascript:;">
                                            <div class="modal-header bg-silver-100">
                                                <h4 class="modal-title">Sự kiện mới</h4>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tiêu đề:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="new-event-title" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row" id="date_1">
                                                    <label class="col-sm-2 col-form-label">Bắt đầu:</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group datepicker date">
                                                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                            <input class="form-control" id="new-event-start" type="date" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kết thúc:</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group datepicker date">
                                                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                            <input class="form-control" id="new-event-end" type="date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Màu sắc:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" id="new-event-color">
                                                            <option value="bg-blue">Xanh da trời</option>
                                                            <option value="bg-red">Đỏ</option>
                                                            <option value="bg-green">Xanh lá cây</option>
                                                            <option value="bg-orange">Cam</option>
                                                            <option value="bg-silver">Bạc</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10 ml-sm-auto">
                                                        <label class="ui-checkbox ui-checkbox-info">
                                                            <input id="new-event-allDay" type="checkbox">
                                                            <span class="input-span"></span>Tất cả ngày</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-default" type="button" data-dismiss="modal">Đóng</button>
                                                <button class="btn btn-info" id="addEventButton" type="submit">Thêm Sự kiện</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="ibox">
                                <div class="ibox-body">
                                    <div id="calendar"></div>
                                    <!-- New Event Dialog-->
                                    <div class="modal fade" id="new-event-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content form-horizontal" action="javascript:;">
                                                <div class="modal-header bg-silver-100">
                                                    <h4 class="modal-title">Sự kiện mới</h4>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tiêu đề:</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" id="new-event-title" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="date_1">
                                                        <label class="col-sm-2 col-form-label">Bắt đầu:</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group datepicker date">
                                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                                <input class="form-control" id="new-event-start" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Kết thúc:</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group datepicker date">
                                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                                <input class="form-control" id="new-event-end" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Color:</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="new-event-color">
                                                                <option value="bg-blue">Blue</option>
                                                                <option value="bg-red">Red</option>
                                                                <option value="bg-green">Green</option>
                                                                <option value="bg-orange">Orange</option>
                                                                <option value="bg-silver">Silver</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10 ml-sm-auto">
                                                            <label class="ui-checkbox ui-checkbox-info">
                                                                <input id="new-event-allDay" type="checkbox">
                                                                <span class="input-span"></span>All Day</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-info" id="addEventButton" type="submit">Add event</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End New Event Dialog-->
                                    <!-- Event Detail Dialog-->
                                    <div class="modal fade" id="event-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content form-horizontal" action="javascript:;">
                                                <div class="modal-header bg-silver-100">
                                                    <h4 class="modal-title">Edit Event</h4>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Title:</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" id="event-title" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="date_1">
                                                        <label class="col-sm-2 col-form-label">Start:</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group datepicker date">
                                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                                <input class="form-control" id="event-start" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">End:</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group datepicker date">
                                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                                <input class="form-control" id="event-end" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Color:</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="event-color">
                                                                <option value="bg-blue">Blue</option>
                                                                <option value="bg-red">Red</option>
                                                                <option value="bg-green">Green</option>
                                                                <option value="bg-orange">Orange</option>
                                                                <option value="bg-silver">Silver</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10 ml-sm-auto">
                                                            <label class="ui-checkbox ui-checkbox-info">
                                                                <input id="event-allDay" type="checkbox">
                                                                <span class="input-span"></span>All Day</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-info" id="editEventButton" type="submit">Save</button>
                                                    <button class="btn btn-danger" id="deleteEventButton" type="button" data-dismiss="modal">Delete</button>
                                                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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