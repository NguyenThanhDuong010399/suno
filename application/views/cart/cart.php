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
            <?php include('include/navbar5.php') ?>
            <!-- navbar end -->
        </header>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Cart</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="cart.html">Cart</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Cart Table Area =================-->
        <section class="cart_table_area p_100">
        	<div class="container">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/product/cart-img.jpg" alt="">
								</td>
								<td>Wheel Axel</td>
								<td>$25.00</td>
								<td>
									<select class="product_select">
										<option data-display="1">1</option>
										<option value="1">2</option>
										<option value="2">3</option> 
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>$25.00</td>
								<td>X</td>
							</tr>
							<tr>
								<td>
									<form class="form-inline"> 
										<div class="form-group"> 
											<input type="text" class="form-control" placeholder="Coupon code">
										</div>
										<button type="submit" class="btn">Apply Coupon</button>
									</form>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<a class="pest_btn" href="#">Add To Cart</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
       			<div class="row cart_total_inner">
        			<div class="col-lg-7"></div>
        			<div class="col-lg-5">
        				<div class="cart_total_text">
        					<div class="cart_head">
        						Cart Total
        					</div>
        					<div class="sub_total">
        						<h5>Sub Total <span>$25.00</span></h5>
        					</div>
        					<div class="total">
        						<h4>Total <span>$25.00</span></h4>
        					</div>
        					<div class="cart_footer">
        						<a class="pest_btn" href="<?php echo base_url('home/checkout') ?>">Thanh Toán</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Cart Table Area =================-->
        
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