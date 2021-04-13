<?php 
	session_start();
	if(!$_SESSION['email']) {
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
				window.location.href = '/btl/admin/dang_nhap.php'
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
					<h3 class="card-title">Sửa bộ sưu tập</h3>
				</div>
				<?php 
					// 2. Lẫy ra được ID 
					$id_khach_hang = $_GET["id"];
					// secho $id_tin_tuc; exit();

					// 3. Viết câu lệnh SQL để lấy tin tức có ID như trên
					$sql = "
						SELECT *
						FROM tbl_bo_suu_tap
						WHERE id_bst='".$id_khach_hang."'
					";

					// 4. Thực hiện truy vấn để lấy dữ liệu
					$khach_hang = mysqli_query($ket_noi, $sql);
					// 5. Hiển thị dữ liệu lên Website
					$row = mysqli_fetch_array($khach_hang);
				;?>
				<!-- /.card-header -->
				<div class="card-body">

					<form action="./sua_thuc_hien.php" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Tên</label>
									<input name="id" class="form-control" type="hidden" required value="<?php echo $row['id_bst'] ?>">
									<input name="ten_kh" class="form-control" required value="<?php echo $row['ten_bst'] ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mô tả</label>
									<input name="username" class="form-control" value="<?php echo $row['mo_ta'] ?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Ngày ra mắt</label>
									<input name="password" type="date" class="form-control" value="<?php echo $row['ngay_ra_mat'] ?>" required>
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
