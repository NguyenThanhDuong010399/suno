<?php require('include/logo_navbar.php') ?>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li>
									<a href=" <?php echo base_url('') ?>">Trang chủ</a>
								</li>
								<li><a href="<?php echo base_url('home/cake') ?>">Bánh</a></li>
								<li><a href="<?php echo base_url('home/menu') ?>">Menu</a></li>
								<li class="dropdown submenu active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Thông tin</a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('home/about') ?>">Thông tin về chúng tôi</a></li>
										<li><a href="our-team.php">Our Chefs</a></li>
										<li><a href="testimonials.php">Testimonials</a></li>
									</ul>
								</li>
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('home/cart') ?>">Giỏ hàng</a></li>
										<li class="dropdown submenu">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Đăng nhập Đăng kí</a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo base_url('home/login') ?>">Đăng nhập</a></li>
												<li><a href="<?php echo base_url('home/register') ?>">Đăng kí</a></li>
											</ul>
										</li>
										<li><a href="<?php echo base_url('home/wishlist') ?>">Yêu thích</a></li>
										<li><a href="<?php echo base_url('home/account') ?>">Tài khoản của tôi</a></li>
										<li><a href="<?php echo base_url('home/don_hang') ?>">Đơn hàng đã đặt</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a href="<?php echo base_url('home/blog') ?>">Blog</a>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
									<ul class="dropdown-menu">
										<li class="dropdown submenu">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Đồ làm bánh</a>
											<ul class="dropdown-menu">
												<li><a href="shop.php">Nguyên liệu</a></li>
												<li><a href="shop.php">Dụng cụ</a></li>
												<li><a href="shop.php">Dụng cụ</a></li>
												<li><a href="shop.php">Túi</a></li>
											</ul>
										</li>
										<li class="dropdown submenu"><a href="product-details.php">Đồ nấu ăn</a>
											<ul class="dropdown-menu">
												<li><a href="shop.php">Nguyên liệu</a></li>
												<li><a href="shop.php">Dụng cụ</a></li>
												<li><a href="shop.php">Dụng cụ</a></li>
												<li><a href="shop.php">Túi</a></li>
											</ul>
										</li>
										<li class="dropdown submenu"><a href="cart.php">Đồ pha chế</a>
											<ul class="dropdown-menu">
												<li><a href="shop.php">Nguyên liệu</a></li>
												<li><a href="shop.php">Dụng cụ</a></li>
												<li><a href="shop.php">Dụng cụ</a></li>
												<li><a href="shop.php">Túi</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="<?php echo base_url('home/contact') ?>">Liên hệ</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>