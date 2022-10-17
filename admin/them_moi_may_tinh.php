<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm mới máy tính</title>
</head>
<body>
	<h1>Trang thêm mới máy tính</h1>

	<form action="../admin/thuc_hien_them_moi_may_tinh.php" method="post" enctype="multipart/form-data">
		<p style="font-weight: bold;">Tên máy tính</p>
	<p><input type="text" name="txtTenmaytinh" value="" style=" width:80%;"></p>
	
  <?php
  require('../config.php');
  $sql = "SELECT * from loai_may";
  $may_tinh=mysqli_query($con, $sql);
	
  ?>
    <p>Loại máy tính</p>
    <select name="txtLoaimay">
    <option value=" ">--Loại máy--</option>
    <?php
    $i=0;
		while($row = mysqli_fetch_array($may_tinh)){
		$i++;
	?>
    	<option value="<?php echo $row['loai_may_id'] ?>"><?php echo $row['loai_may_id'] ?></option>
        <?php
	}
		?>
    </select>
  
	

	<p style="font-weight: bold;">Mô tả</p>
	<p><input type="text" name="txtMota" value="" style=" width:80%;"></p>

	<p style="font-weight: bold;">Giá bán</p>
	<p><input type="text" name="txtGiaban" value="" style=" width:80%;"></p>

	

	<p style="text-align: left;"><button type="submit">Thêm mới</button></p>

	</form>



</body>
</html>