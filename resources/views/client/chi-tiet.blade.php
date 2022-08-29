@extends('client.master')
@section('noidung')
<section class="blog_area single-post-area section-padding" style="padding-top: 0px !important;">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="../assets/img/news/{{$postList->post_image}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$postList->post_title}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i>{{$postList->name}} </a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> {{$postList->post_view}} lượt xem</a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i>{{$postList->post_date}}</a></li>
                     </ul>
                     <b>{{$postList->post_summary}}</b> <hr>
                     <p class="excert">
                    <?php echo $postList->post_content ?>
                     </p>
                     
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> </p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php if(isset($prevNew)){ ?>
                           <div class="thumb">
                              <a href="http://localhost:8000/chi-tiet/{{$prevNew->post_id}}">
                                 <img class="img-fluid" src="../assets/img/news/{{$prevNew->post_image}}" alt="" width="60px" height="60px">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="http://localhost:8000/chi-tiet/{{$prevNew->post_id}}">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Tin Trước</p>
                             <a href="http://localhost:8000/chi-tiet/{{$prevNew->post_id}}" style="color: black">{{$prevNew->post_title}}</a>
                           </div>
                           <?php }else{}?>
                        </div>
                        
                        
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <?php if(isset($nextNew)){ ?>
                           <div class="detials">
                              <p>Tin Tiếp Theo</p>
                            <a href="http://localhost:8000/chi-tiet/{{$nextNew->post_id}}" style="color: black">{{$nextNew->post_title}}</a>
                           </div>
                           <div class="arrow">
                              <a href="http://localhost:8000/chi-tiet/{{$nextNew->post_id}}">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="http://localhost:8000/chi-tiet/{{$nextNew->post_id}}">
                                 <img class="img-fluid" src="../assets/img/news/{{$nextNew->post_image}}" alt="" width="60px" height="60px">
                              </a>
                           </div>
                           <?php }else{}?>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <!-- <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="assets/img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>Harvard milan</h4>
                        </a>
                        <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p>
                     </div>
                  </div>
               </div> -->
               <div class="comments-area">
                  <h4>Bình luận</h4>
                  @foreach($cmtsList as $item)
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 {{$item->cmt_content}}
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">{{$item->name}}</a>
                                    </h5>
                                    <p class="date">{{$item->cmt_date}}</p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">Trả lời</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  
               </div>
               
               <div class="comment-form">
               <?php if(isset(Auth::user()->name)){?>
                  <h4>Để lại bình luận của bạn</h4>
                  <form class="form-contact comment_form" action="/tin/them" id="commentForm" method="post">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="cmt_content" id="comment" cols="30" rows="6"
                                 placeholder="Viết bình luận"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Tên" value="{{Auth::user()->name}}" readonly>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Địa chỉ Email" value="{{Auth::user()->email}}" readonly>
                           </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="post_id" value="{{$postList->post_id}}">
                        <input type="hidden" name="cmt_status" value="1">
                        <!-- <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div> -->
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Gửi bình luận</button>
                     </div>
                     @csrf
                  </form>
                  <?php  }else{ ?>
                    <a href="http://localhost:8000/login"><h4 style="text-align:center;">Đăng nhập để bình luận!</h4></a> 
                  <?php  } ?>
               </div>
            </div>
            @include('client._aside')
         </div>
      </div>
   </section>
   @endsection('noidung')