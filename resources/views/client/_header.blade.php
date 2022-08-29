<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="../assets/img/icon/header_icon1.png" alt="">34ºc, Nắng </li>
                                    <li><img src="../assets/img/icon/header_icon1.png" alt="">
                                        <?php 
                                            echo date("d/m/Y");
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <?php if(isset(Auth::user()->name)){?>
                                    <li>
                                        <form method="POST" action="">
                                            @csrf
                                            <x-dropdown-link>
                                                {{ Auth::user()->name }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Đăng xuất') }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>
                                    <?php  }else{ ?>
                                    <li> <a href="http://localhost:8000/login">Đăng nhập</a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo" style="height:98px;">
                                <a href="http://localhost:8000/"><img src="../assets/img/logo/newnow.png" alt=""
                                        style="height:100%;"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <a href="{{$adsTopList->ads_link}}"><img
                                        src="../assets/img/gallery/{{$adsTopList->ads_image}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="http://localhost:8000/"><img src="../assets/img/logo/newnow.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="http://localhost:8000/">Trang chủ</a></li>
                                        <li><a href="#">Danh mục</a>
                                            <ul class="submenu">
                                                @foreach($categoryList as $item)
                                                <li><a
                                                        href="http://localhost:8000/danh-muc/{{$item->category_id}}">{{$item->category_name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        {{-- <li><a href="about.html">Giới thiệu</a></li> --}}
                                        <li><a href="http://localhost:8000/tin">Tin mới nhất</a></li>
                                        <li><a href="http://localhost:8000/contact">Liên hệ</a></li>
                                        <!-- <li><a href="#">Danh mục</a>
                                                <ul class="submenu">
                                                @foreach($categoryList as $item)
                                                    <li><a href="elements.html">{{$item->category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="/tim-kiem" method="get">
                                        <input type="text" placeholder="Tìm kiếm" name="keyword">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>