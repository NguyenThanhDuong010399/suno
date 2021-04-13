<?php 
	session_start();
	if(!$_SESSION['ad_email']) {
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn không có quyền truy cập!');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = '/admin/dang_nhap.php'
			</script>
		";
	}
;?>
<!DOCTYPE html>
<html>
<head>
  <?php include('../includes/head.php') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	<?php include('../includes/header.php') ?>

	<?php include('../includes/sidebar.php') ?>

	<?php include('../includes/ket_noi.php') ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Sửa khách hàng</h3>
				</div>
				<?php 
					// 2. Lẫy ra được ID 
					$customer_id = $_GET["id"];
					// secho $id_tin_tuc; exit();

					// 3. Viết câu lệnh SQL để lấy tin tức có ID như trên
					$sql = "
						SELECT *
						FROM tbl_customer
						WHERE customer_id='".$customer_id."'
					";

					// 4. Thực hiện truy vấn để lấy dữ liệu
					$customer = mysqli_query($ket_noi, $sql);
					// 5. Hiển thị dữ liệu lên Website
					$row = mysqli_fetch_array($customer);
				;?>
				<!-- /.card-header -->
				<div class="card-body">

					<form action="./sua_thuc_hien.php" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Tên đăng nhập</label>
									<input name="id" class="form-control" type="hidden" required value="<?php echo $row['customer_id'] ?>">
									<input name="cust_username" class="form-control" required value="<?php echo $row['cust_username'] ?>">
								</div>
							</div><!-- 
							<div class="col-md-6">
								<div class="form-group">
									<label>Tên đăng nhập</label>
									<input name="username" class="form-control" value="<?php //echo $row['username'] ?>" required>
								</div>
							</div> -->
							<div class="col-md-6">
								<div class="form-group">
									<label>Mật khẩu</label>
									<input name="cust_password" type="cust_password" class="form-control" value="<?php echo $row['cust_password'] ?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input name="cust_email" type="email" class="form-control" value="<?php echo $row['cust_email'] ?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Số điện thoại</label>
									<input name="cust_phone_number" class="form-control" value="<?php echo $row['cust_phone_number'] ?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Địa chỉ</label>
									<input name="cust_address" type="dia_chi" class="form-control" value="<?php echo $row['cust_address'] ?>"  required >
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-info">Lưu</button>
							</div>
						</div>
					</form>
				</div>
            </div>
		</section>
		<!-- /.content -->
		</div>
	</div>
	<!-- ./wrapper -->

	<?php include('../includes/footer.php') ?>
</body>
</html>
