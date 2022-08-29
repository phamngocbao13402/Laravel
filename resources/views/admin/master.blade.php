<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>NewNow | Trang quản trị</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('assets_admin/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" />

    <link href="{{asset('assets_admin/vendors/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets_admin/vendors/fullcalendar/dist/fullcalendar.print.min.css')}}" rel="stylesheet" media="print" />
    <!-- THEME STYLES-->
    <link href="{{asset('assets_admin/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('admin._header')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{asset('assets_admin/img/admin-avatar.png')}}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">{{ Auth::user()->name }}</div><small>Quản trị viên</small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="http://localhost:8000/admin/"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Trang chủ Quản trị</span>
                        </a>
                    </li>
                    <li class="heading">QUẢN LÍ</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-database"></i>
                            <span class="nav-label">Danh Mục</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                            <a href="http://localhost:8000/admin/category"><i class="fa fa-list-ul" style="width:20px;"></i> Danh sách</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/admin/category_add"><i class="fa fa-plus-square" style="width:20px;"></i>Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Bài viết</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                               <i class="fa fa-angle-left arrow"></i> <a href="http://localhost:8000/admin/post"><i class="fa fa-server" style="width:20px;"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/admin/post_add"><i class="fa fa-plus-circle" style="width:20px;"></i>Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                            <span class="nav-label">Người dùng</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="http://localhost:8000/admin/user"><i class="	fa fa-vcard" style="width:20px;"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/admin/user_add"><i class="fa fa-user-plus" style="width:20px;"></i>Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-comments"></i>
                            <span class="nav-label">Bình Luận</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="http://localhost:8000/admin/comment"><i class="fa fa-commenting" style="width:20px;"></i>Danh sách</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-tags"></i>
                            <span class="nav-label">Thẻ</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="http://localhost:8000/admin/tag"><i class="fa fa-tag" style="width:20px;"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/admin/tag_add"><i class="fa fa-hashtag" style="width:20px;"></i>Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-handshake-o"></i></i>
                            <span class="nav-label">Quảng cáo</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="http://localhost:8000/admin/ads"><i class="fa fa-indent" style="width:20px;"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/admin/ads_add"><i class="fa fa-plus-square" style="width:20px;"></i>Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('noidung','Thêm nội dung')


        <!-- END THEME CONFIG PANEL-->
        <!-- BEGIN PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <div class="page-preloader">Loading</div>
        </div>
        <!-- END PAGA BACKDROPS-->
        <!-- CORE PLUGINS-->
        <script src="{{asset('assets_admin/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}"
            type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="{{asset('assets_admin/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"
            type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>

        <script src="{{asset('assets_admin/vendors/summernote/dist/summernote.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>

        <script src="{{asset('assets_admin/vendors/moment/min/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/fullcalendar/dist/fullcalendar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/vendors/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets_admin/js/scripts/calendar-demo.js')}}" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="{{asset('assets_admin/js/app.min.js')}}" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="{{asset('assets_admin/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>
</body>

</html>