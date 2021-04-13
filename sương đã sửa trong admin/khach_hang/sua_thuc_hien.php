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

	// 2. Lẫy dữ liệu để cập nhật tin tức
	$customer_id = $_POST["customer_id"];
	$cust_username = $_POST["cust_username"];
	$cust_password = $_POST["cust_password"];
	$cust_email = $_POST["cust_email"];
	$cust_phone_number = $_POST["cust_phone_number"];
	$cust_address = $_POST["cust_address"];

	$sql = "
		UPDATE `tbl_customer`
		SET
			`cust_username` = '".$cust_username."',
			`cust_password` = '".$cust_password."',
			`cust_email` = '".$cust_email."',
			`cust_phone_number` = '".$cust_phone_number."',
			`cust_address` = '".$cust_address."'
			WHERE `customer_id` = '".$customer_id."' 
		";

	if ($ket_noi->query($sql) === TRUE) {

		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật khách hàng thành công.');
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