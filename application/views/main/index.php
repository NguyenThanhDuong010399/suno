<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Suno Bakeries</title>

        <?php include('include/css1.php') ?>
    </head>
    <body>
        
        <!--================Main Header Area =================-->
    <header class="main_header_area">
            <!-- header-top start -->
      <?php include('include/header-top.php') ?>
      <!-- header-top End -->
            <!-- navbar start -->
            <?php include('include/navbar.php') ?>
            <!-- navbar end -->
    </header>
        <!--================End Main Header Area =================-->
        
        <!--================Slider Area =================-->
        <?php include('include/slideshow.php') ?>
        <!--================End Slider Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_bakery_area">
          <div class="container">
            <div class="welcome_bakery_inner p_100">
              <div class="row">
                <div class="col-lg-6">
                  <div class="main_title">
                <h2>Welcome to Suno Bakeries</h2>
                <p>Cửa hàng mang đến cho khách hàng những sản phẩm chất lượng tốt nhất , giá cả hợp lý.</p>
              </div>
                  <div class="welcome_left_text">
                    <p>Với các tiêu chí chọn lọc nguyên liệu khắt khe và quy trình làm ra những chiếc bánh ngon , bổ , rẻ luôn luôn đáp ứng những yêu cầu của khách hàng đã đem lại những đánh giá tuyệt vời dành cho cửa hàng.</p>
                    <a class="pink_btn" href="#">Xem thêm về chúng tôi</a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="welcome_img">
                    <img class="img-fluid" src="img/cake-feature/welcome-right.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="cake_feature_inner">
              <div class="main_title">
            <h2>Sản phẩm bán chạy</h2>
            <h5> Seldolor sit amet consect etur</h5>
          </div>
              <div class="cake_feature_slider owl-carousel">
                <?php foreach ($data as $row): ?>
                  <div class="item">
                  <div class="cake_feature_item">
                    <div class="cake_img">
                      <img src="<?php echo base_url('image/'.$row->anh) ?>" alt="">
                    </div>
                    <div class="cake_text">
                      <h4><?php echo $row->gia_ban; ?></h4>
                      <a href="home/product_detail"><h3><?php echo $row->ten_sp; ?></h3></a>
                      <a class="pest_btn" href="home/cart">Thêm vào giỏ hàng</a>
                    </div>
                  </div>
                </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================Special Recipe Area =================-->
        <section class="special_recipe_area">
          <div class="container">
            <div class="special_recipe_slider owl-carousel">
              <div class="item">
                <div class="media">
                  <div class="d-flex">
                    <img src="img/recipe/recipe-1.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4>Công thức đặc biệt</h4>
                    <p>Viết công thức vào đây.</p>
                    <a class="w_view_btn" href="#">Xem chi tiết</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="media">
                  <div class="d-flex">
                    <img src="img/recipe/recipe-1.png" alt="">
                  </div>
                  <div class="media-body">
                                <h4>Công thức đặc biệt</h4>
                                <p>Viết công thức vào đây.</p>
                                <a class="w_view_btn" href="#">Xem chi tiết</a>
                            </div>
                </div>
              </div>
              <div class="item">
                <div class="media">
                  <div class="d-flex">
                    <img src="img/recipe/recipe-1.png" alt="">
                  </div>
                  <div class="media-body">
                                <h4>Công thức đặc biệt</h4>
                                <p>Viết công thức vào đây.</p>
                                <a class="w_view_btn" href="#">Xem chi tiết</a>
                            </div>
                </div>
              </div>
              <div class="item">
                <div class="media">
                  <div class="d-flex">
                    <img src="img/recipe/recipe-1.png" alt="">
                  </div>
                  <div class="media-body">
                                <h4>Công thức đặc biệt</h4>
                                <p>Viết công thức vào đây.</p>
                                <a class="w_view_btn" href="#">Xem chi tiết</a>
                            </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Special Recipe Area =================-->
        
        <!--================Service Area =================-->
        <section class="service_area">
          <div class="container">
            <div class="single_w_title">
              <h2>Các dịch vụ mà chúng tôi cung cấp</h2>
            </div>
            <div class="row service_inner">
              <div class="col-lg-4 col-6">
                <div class="service_item">
                            <!-- <img src="image/logo-suno6.png" alt=""> -->
                  <i class="flaticon-food-2"></i>
                  <h4>Thanh toán</h4>
                  <p>Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore.</p>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="service_item">
                  <i class="flaticon-food-1"></i>
                  <h4>Bánh và dụng cụ</h4>
                  <p>Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore.</p>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="service_item">
                  <i class="flaticon-food"></i>
                  <h4>Công thức</h4>
                  <p>Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Service Area =================-->
        
        <!--================Discover Menu Area =================-->
        <section class="discover_menu_area">
          <div class="discover_menu_inner">
            <div class="container">
              <div class="main_title">
            <h2>Discover Menu</h2>
            <h5>Duis aute irure dolor in reprehenderit voluptate</h5>
          </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="discover_item_inner">
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="discover_item_inner">
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                    <div class="discover_item">
                  <h4>Double Chocolate Pie</h4>
                  <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Discover Menu Area =================-->
        
        <!--================Client Says Area =================-->
        <section class="client_says_area p_100">
          <div class="container">
            <div class="client_says_inner">
              <div class="c_says_title">
                <h2>Khách hàng nói gì về chúng tôi ?</h2>
              </div>
              <div class="client_says_slider owl-carousel">
                <div class="item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/client/client-1.png" alt="">
                      <!-- <h3>“</h3> -->
                    </div>
                    <div class="media-body">
                      <p>Phúc Híp đã mua ở đây và cảm thấy rất tuyệt vời vì Phúc rất đẹp trai.</p>
                      <h5>- Phúc Híp</h5>
                    </div>
                  </div>
                </div>
                <div class="item">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/client/client-1.png" alt="">
                                    <!-- <h3>“</h3> -->
                                </div>
                                <div class="media-body">
                                    <p>Phúc Híp đã mua ở đây và cảm thấy rất tuyệt vời vì Phúc rất đẹp trai.</p>
                                    <h5>- Phúc Híp</h5>
                                </div>
                            </div>
                        </div>
                <div class="item">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/client/client-1.png" alt="">
                                    <!-- <h3>“</h3> -->
                                </div>
                                <div class="media-body">
                                    <p>Phúc Híp đã mua ở đây và cảm thấy rất tuyệt vời vì Phúc rất đẹp trai.</p>
                                    <h5>- Phúc Híp -</h5>
                                </div>
                            </div>
                        </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================End Client Says Area =================-->
        <section class="our_chef_area p_100">
          <div class="container">
            <div class="row our_chef_inner">
              <div class="col-lg-2 col-6">
                <div class="chef_text_item">
                  <div class="main_title">
                <h2>Đầu bếp của chúng tôi</h2>
                <p>Với trình độ chém gió thượng thừa sẽ khiến các bạn choáng váng.</p>
              </div>
                </div>
              </div>
              <div class="col-lg-2 col-6">
                <div class="chef_item">
                  <div class="chef_img">
                    <img class="img-fluid" src="img/chef/chef-1.jpg" alt="">
                    <ul class="list_style">
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                      <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                  <a href="#"><h4>Phúc Híp</h4></a>
                  <h5>Đẹp trai là điều ai cũng biết</h5>
                </div>
              </div>
              <div class="col-lg-2 col-6">
                <div class="chef_item">
                  <div class="chef_img">
                    <img class="img-fluid" src="img/chef/chef-2.jpg" alt="">
                    <ul class="list_style">
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                      <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                  <a href="#"><h4>Mai Còiii</h4></a>
                  <h5>To hơn những gì bạn tưởng tượng</h5>
                </div>
              </div>
              <div class="col-lg-2 col-6">
                <div class="chef_item">
                  <div class="chef_img">
                    <img class="img-fluid" src="img/chef/chef-3.jpg" alt="">
                    <ul class="list_style">
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                      <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                  <a href="#"><h4>Thanh Dương</h4></a>
                  <h5>Đẹp trai số 2 thì ai là số 1</h5>
                </div>
              </div>
                    <div class="col-lg-2 col-6">
                        <div class="chef_item">
                            <div class="chef_img">
                                <img class="img-fluid" src="img/chef/chef-3.jpg" alt="">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <a href="#"><h4>Quỳnh Sương</h4></a>
                            <h5>Rapper chuyên bị dizzz</h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="chef_item">
                            <div class="chef_img">
                                <img class="img-fluid" src="img/chef/chef-3.jpg" alt="">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <a href="#"><h4>Thu Trà</h4></a>
                            <h5>Tấm chiếu mới</h5>
                        </div>
                    </div>
            </div>
          </div>
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================Latest News Area =================-->
        <section class="latest_news_area p_100">
          <div class="container">
            <div class="main_title">
          <h2>Bài viết mới</h2>
          <h5>Hướng dẫn và đồng hành cùng bạn </h5>
        </div>
            <div class="row latest_news_inner">
              <div class="col-lg-4 col-md-6">
                <div class="l_news_image">
                  <div class="l_news_img">
                    <img class="img-fluid" src="img/blog/latest-news/l-news-1.jpg" alt="">
                  </div>
                  <div class="l_news_hover">
                    <a href="#"><h5>Oct 15, 2016</h5></a>
                    <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="l_news_item">
                  <div class="l_news_img">
                    <img class="img-fluid" src="img/blog/latest-news/l-news-2.jpg" alt="">
                  </div>
                  <div class="l_news_text">
                    <a href="#"><h5>Oct 15, 2016</h5></a>
                    <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="l_news_item">
                  <div class="l_news_img">
                    <img class="img-fluid" src="img/blog/latest-news/l-news-3.jpg" alt="">
                  </div>
                  <div class="l_news_text">
                    <a href="#"><h5>Oct 15, 2016</h5></a>
                    <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Latest News Area =================-->
        
        <!--================Newsletter Area =================-->
        <?php include('include/newsletter.php') ?>
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        <?php include('include/footer1.php') ?>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        <?php include('include/Search1.php') ?>
    </body>

</html>