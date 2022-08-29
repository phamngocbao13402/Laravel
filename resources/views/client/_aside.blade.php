<div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <!-- <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside> -->
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Danh mục</h4>
                     <ul class="list cat-list">
                     @foreach($categoryList as $item)
                        <li>
                           <a href="http://localhost:8000/danh-muc/{{$item->category_id}}" class="d-flex">
                              <p>{{$item->category_name}} </p>
                              <!-- <p> (37)</p> -->
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Tin mới nhất</h3>
                     @foreach($tinnewList as $item)
                     <div class="media post_item">
                        <img src="../assets/img/news/{{$item -> post_image}}" alt="post" width="80px" height="80px">
                        <div class="media-body">
                           <a href="http://localhost:8000/chi-tiet/{{$item -> post_id}}">
                              <h3>{{$item -> post_title}}</h3>
                           </a>
                           <p>{{$item -> post_date}}</p>
                        </div>
                     </div>
                     @endforeach
                  </aside>
                  {{-- <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Thẻ</h4>
                     <ul class="list">
                        @foreach($tinnewList as $item)
                        <li>
                           <a href="#">{{$item->post_tag}}</a>
                        </li>
                        @endforeach
                     </ul>
                  </aside> --}}
                  <!-- <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside> -->
               </div>
            </div>