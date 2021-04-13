<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <?php include('include/css.php') ?>
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_area">
            <!-- header-top start -->
			<?php include('include/header-top.php') ?>
			<!-- header-top End -->
            <!-- navbar start -->
            <?php include('include/navbar7.php') ?>
            <!-- navbar end -->
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Product Details</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="product-details.html">Sản phẩm chi tiết</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area p_100">
        	<div class="container">
                <?php foreach ($data as $row): ?>
                    <form action=""></form>
                		<div class="row product_d_price">
                			<div class="col-lg-6">
                				<div class="product_img"><img class="img-fluid" src="<?php echo base_url('image/'.$row['anh']); ?>" alt=""></div>
                			</div>
                			<div class="col-lg-6">
                				<div class="product_details_text">
                					<h4><?php echo $row['ten_sp'] ?></h4>
                                </div>
                                    <p>Nhà sản xuất : <span class="status" style="color: #62ab00"> <?php foreach ($ncc as $key): ?>
                                        <?php echo $key['ten_ncc'] ?>
                                    <?php endforeach ?> </p>
                                    <p>Mã sản phẩm : <span style="color: #62ab00"> <?php echo $row['id_sp']; ?> </span></p>
                                    <p>Tình trạng : <?php if ($row['so_luong'] > 0): ?>
                                        <span style="color: #62ab00"> Còn hàng</Span>
                                    <?php else: ?>
                                        <span  style="color: red"> Hết hàng</Span>
                                    <?php endif ?>
                                    </p>
                                    <p>Giá cũ : <del class="price-old"><?php echo $row['gia_ban']; ?> VNĐ</del></p>
                					<p>Giá mới : <span class="price" style="color: red"><?php echo $row['gia_giam']; ?> VNĐ</span></p>
                                    <p><?php echo $row['mo_ta']; ?></p>
                                    <div class="product_details_text">
                    					<div class="quantity_box">
                    						<label for="quantity">Số lượng :</label>
                    						<input type="text" placeholder="1" id="quantity">
                                            <label for="size">Đơn vị : </label>
                                            <input type="text" name="" id="size" list="exampleList">
                                                <datalist id="exampleList">
                                                    <?php foreach ($data as $row): ?>
                                                        <option value="<?php echo $row['size'] ?>"><?php echo $row['size'] ?></option>  
                                                    <?php endforeach ?>
                                              </datalist>
                    					</div>
                    					<a class="pink_more" href="cart" type="addcart" class="add-cart" onclick="addCart(<?php echo $row["id_sp"]; ?>)">Thêm vào giỏ hàng</a>
                				    </div>
                			</div>
                		</div>
                    </form>
            		<div class="product_tab_area">
    					<nav>
    						<div class="nav nav-tabs" id="nav-tab" role="tablist">
    							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripton</a>
    							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</a>
    							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Review (0)</a>
    						</div>
    					</nav>
    					<div class="tab-content" id="nav-tabContent">
    						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    						</div>
    						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    						</div>
    						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    						</div>
    					</div>
            		</div>
                <?php endforeach ?>
        	</div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================Similar Product Area =================-->
        <section class="similar_product_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>Similar Products</h2>
        		</div>
        		<div class="row similar_product_inner">
                    <?php foreach ($pl as $row): ?>
                        <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="<?php echo base_url('image/'.$row['anh']); ?>" width="270px" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><?php echo $row['gia_giam'] ?></h4>
                                <h3><?php echo $row['ten_sp'] ?></h3>
                                <a class="pest_btn" href="#">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Similar Product Area =================-->
        
        <!--================Newsletter Area =================-->
        <!--================Newsletter Area =================-->
        <?php include('include/newsletter.php') ?>
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        <?php include('include/footer.php') ?>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        <?php include('include/Search.php') ?>
    </body>

</html>