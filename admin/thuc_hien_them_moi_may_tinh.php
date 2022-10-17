<?php
	
	$ten=$_POST["txtTenmaytinh"];
	$loai_may=$_POST["txtLoaimay"];
	$mo_ta=$_POST["txtMota"];
	$gia=$_POST["txtGiaban"];
	


	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$sql="INSERT INTO `may_tinh` (`may_tinh_id`, `ten_may_tinh`, `loai_may_id`, `mo_ta_may_tinh`, `gia_ban`) VALUES (NULL, '".$ten."', '".$loai_may."', '".$mo_ta."', '".$gia."')";
	//	echo $sql; exit();

	// Thực hiện xoá dữ liệu
	mysqli_query($con, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn xoá thành công
;?>
<script type="text/javascript">
	window.alert("Thêm mới dữ liệu thành công!");
	window.location.href = "../admin/quan_tri_may_tinh.php";
</script>	