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
					<h3 class="card-title">Danh sách khách hàng</h3>
					<div class="float-right">
						<a class="btn btn-primary" href="them.php">Thêm mới</a>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table class="table table-bordered">
						<thead>                  
						<tr>
						 	<td>ID</td>
							<td>username</td>
							<td>password</td>
							<td>email</td>
							<td>sdt</td>
							<td>địa chỉ</td>
							<td></td>
						</tr>
						</thead>
						<tbody>
							<?php 
							// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
							$sql = "
								SELECT *
								FROM tbl_customer
								ORDER BY customer_id DESC
							";

							// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
							$customer = mysqli_query($ket_noi, $sql);

							// 4. Hiển thị dữ liệu mong muốn
							$i=0;
							while ($row = mysqli_fetch_array($customer)) {
								$i++;
							?>
						    <tr>
						     	<td>
									<?php echo $row["customer_id"];?>
								</td>
								<td>
									<?php echo $row["cust_username"];?>
								</td>
								<td>
									<?php echo $row["cust_password"];?>
								</td>
								<td>
								
									<?php echo $row["cust_email"];?>
								</td>
								<td>
									<?php echo $row["cust_phone_number"];?>
								</td>
								<td>
									<?php echo $row["cust_address"];?>
								</td>
								<td>
									<a href="sua.php?id=<?php echo $row["customer_id"];?>" class="btn btn-info">Sửa</a>
									<a href="xoa.php?id=<?php echo $row["customer_id"];?>" class="btn btn-danger">Xóa</a>
								</td>
						    </tr>
						<?php } ?>
						</tbody>
					</table>
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
