                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="../assets/img/news/{{$tintop1List->post_image}}" alt="" width="770px" height="441px">
                                <div class="trend-top-cap">
                                    <span class="color{{$tintop1List->category_id}}">{{$tintop1List->category_name}}</span>
                                    <h2><a href="http://localhost:8000/chi-tiet/{{$tintop1List->post_id}}">{{$tintop1List->post_title}}</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @foreach($tintop2List as $item)
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="../assets/img/news/{{$item->post_image}}" alt="" width="237px" height="158px">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color{{$item->category_id}}">{{$item->category_name}}</span>
                                        <h4><a href="http://localhost:8000/chi-tiet/{{$item->post_id}}">{{$item->post_title}}</a></h4>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                                <!-- <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="../assets/img/trending/trending_bottom2.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4><h4><a href="http://localhost:8000/chi-tiet/2">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="../assets/img/trending/trending_bottom3.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="http://localhost:8000/chi-tiet/2"> Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <!-- <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="../assets/img/trending/right1.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Xã hội</span>
                                <h4><a href="http://localhost:8000/chi-tiet/2">Công an Đà Lạt làm rõ vụ "nữ tướng" múa dao trên phố</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="../assets/img/trending/right2.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">sea beach</span>
                                <h4><a href="http://localhost:8000/chi-tiet/2">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="../assets/img/trending/right3.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">Bike Show</span>
                                <h4><a href="http://localhost:8000/chi-tiet/2">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div> 
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="../assets/img/trending/right4.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">See beach</span>
                                <h4><a href="http://localhost:8000/chi-tiet/2">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="../assets/img/trending/right5.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Skeping</span>
                                <h4><a href="http://localhost:8000/chi-tiet/2">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div> -->
                        <a href="{{$adsFirstList->ads_link}}"><img src="../assets/img/gallery/{{$adsFirstList->ads_image}}" alt=""></a>
                    </div>
                </div>