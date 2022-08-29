<div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Tin HOT nhất</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    @foreach($tinnewList as $item)
                                    <li class="news-item">{{$item->post_title}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>