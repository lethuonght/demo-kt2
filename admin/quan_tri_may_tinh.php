<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị máy tính</title>
</head> 

<body>
	<h3>Danh sách máy tính</h3>
	<?php 
		// Kết nối đến CSDL
		require('../config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM may_tinh ORDER BY may_tinh_id DESC";

		// Thực hiện truy vấn đến bảng dữ liệu
		$may_tinh=mysqli_query($con, $sql);
	;?>
	
	<p style="text-align: left; font-weight: bold;"><a href="../admin/them_moi_may_tinh.php"><img src= "../img/add.png" style="width: 30px; height: auto " align="left"></a> Thêm mới </p>
	<table>
		<tr>
			<td style="width: 50px; text-align: center; font-weight: bold;">STT</td>
			<td style="width: 150px; text-align: center; font-weight: bold;">Tên máy tính</td>
			<td style="width: 150px; text-align: center; font-weight: bold;">Mô tả máy tính</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Xoá</td>
			
		</tr>
		<?php 
		// In kết quả truy vấn ra màn hình
		$i=0;
		while ($row = mysqli_fetch_array($may_tinh)) {
			$i++;
		;?>
		<tr>
			<td style="text-align: center;"><?php echo $i;?></td>
		<!--	<td  style="text-align: center;"><?php echo $row["may_tinh_id"];?></td>-->
			<td style="text-align: center;"><?php echo $row["ten_may_tinh"];?></td>
			<td style="text-align: center;"><?php echo $row["mo_ta_may_tinh"];?></td>
			
			
			<td style="text-align: center;"><a href="../admin/xoa_may_tinh.php?id=<?php echo $row["may_tinh_id"];?>"><img src= "../img/delete.png" style="width: 30px; height: auto;"></a></td>
		</tr>
		<?php 
		}
		;?>
	</table>
</body>
</html>