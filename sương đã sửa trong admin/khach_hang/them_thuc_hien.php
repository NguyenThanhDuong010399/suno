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
<?php 
	// 1. Chuỗi kết nối đến CSDL
	include('../includes/ket_noi.php');

	// 2. Lẫy dữ liệu để thêm mới tin tức
	$cust_username = $_POST["cust_username"];
	$cust_password = $_POST["cust_password"];
	$cust_email = $_POST["cust_email"];
	$cust_phone_number = $_POST["cust_phone_number"];
	$cust_address = $_POST["cust_address"];
// echo "<pre>";
// print_r($_FILES);die;
	// Lấy ra thông tin ảnh minh họa


	// 3. Viết câu lệnh SQL để thêm mới tin tức có ID như trên
	$sql = "
		INSERT INTO `tbl_customer` (`cust_username`, `cust_password`, `cust_email`,`cust_phone_number`,`cust_address`) 
		VALUES ('".$cust_username."', '".$cust_password."', '".$cust_email."','".$cust_phone_number."','".$cust_address."'); 
	";

	// // 4. Thực hiện truy vấn để thêm mới dữ liệu
	// mysqli_query($ket_noi, $sql);

	if ($ket_noi->query($sql) === TRUE) {
	 	// 5. Thông báo việc thêm mới tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã thêm khách hàng thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './danh_sach.php'
			</script>
		";
	} else {
  		echo "Error: " . $sql . "<br>" . $ket_noi->error;
	}
;?>