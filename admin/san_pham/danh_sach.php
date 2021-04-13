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
				window.location.href = '../dang_nhap.php'
			</script>
		";
	}
;?>
<!DOCTYPE html>
<html>
<head>
  <?php include('../include/head.php') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	<?php include('../include/header.php') ?>

	<?php include('../include/sidebar.php') ?>

	<?php include('../include/ket_noi.php') ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Danh sách sản phẩm</h3>
					<div class="float-right">
						<a class="btn btn-primary" href="them.php">Thêm mới</a>
					</div>
				</div>

				<!-- /.card-header -->
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered">
						<thead>                  
							<tr>
								<td>STT</td>
								<td>Ảnh minh họa</td>
								<td>Tên sản phẩm</td>
								<td>Tên loại sp</td>
								<td>Số lượng</td>
								<td>Giá cũ</td>
								<td>Giá mới</td>
								<td>Đơn vị</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<?php 
								// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
								$sql = "SELECT * FROM `tbl_loai_san_pham` join `tbl_san_pham` on tbl_loai_san_pham.id_loai_san_pham=tbl_san_pham.id_loai_san_pham order by tbl_san_pham.id_san_pham DESC 
								";

								// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
								$noi_dung_san_pham = mysqli_query($ket_noi, $sql);

								// 4. Hiển thị dữ liệu mong muốn
								$i=0;
								while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
									$i++;
							?>
								<tr>
									<td><?php echo $i;?></td>
									<td>
										<img src="/btl/img/<?php 
												if ($row["anh_san_pham"]<>"") {
													echo $row["anh_san_pham"];
												} else {
													echo "diep4.png";
												}
											;?>" width="100px" height="auto">
									</td>
									<td>
										<?php echo $row["ten_san_pham"];?>
									</td>
									<td>
										<?php echo $row["ten_loai_san_pham"];?>
									</td>
									<td>
										<?php echo $row["so_luong"];?>
									</td>
									<td>
										<?php echo $row["gia_cu"];?>
									</td>
									<td>
										<?php echo $row["gia_moi"];?>
									</td>
									<td>
										<?php echo $row["don_vi"];?>
									</td>
									<!-- <td>
										<?php echo $row["gia_giam"];?>
									</td> -->
									<td>
										<a href="sua.php?id=<?php echo $row["id_san_pham"];?>" class="btn btn-info">Sửa</a>
										<a href="xoa.php?id=<?php echo $row["id_san_pham"];?>" class="btn btn-danger">Xóa</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer clearfix">
					<ul class="pagination pagination-sm m-0 float-right">
						<li class="page-item"><a class="page-link" href="#">«</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">»</a></li>
					</ul>
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
