<?php

include 'db.php';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['tensp'])) {
		$s_tensp = $_POST['tensp'];
	}

	if (isset($_POST['urlimg'])) {
		$s_urlimg = $_POST['urlimg'];
	}

	if (isset($_POST['gia'])) {
		$s_gia = $_POST['gia'];
	}
	if (isset($_POST['tragop'])) {
		$s_tragop = $_POST['tragop'];

		//echo $s_tragop;
	}
	if (isset($_POST['chitiet'])) {
		$s_chitiet = $_POST['chitiet'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$s_tensp = str_replace('\'', '\\\'', $s_tensp);
	$s_urlimg = str_replace('\'', '\\\'', $s_urlimg);
	$s_gia = str_replace('\'', '\\\'', $s_gia);
	$s_tragop = str_replace('\'', '\\\'', $s_tragop);
	$s_chitiet = str_replace('\'', '\\\'', $s_chitiet);
	$s_id = str_replace('\'', '\\\'', $s_id);

	$sql = "insert into sanpham(tensp, urlimg, gia,tragop,chitiet) value ('$s_tensp', '$s_urlimg', '$s_gia','$s_tragop','$s_chitiet')";

	echo $sql;
	execute($sql);

	header('Location: admin.php');
	die();
}
?>
<!DOCTYPE html>


<html>
<head>
	<title>Add San Pham</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">

		<form action="" method="POST">



			<div class="form-group">
				<label for="tieude">Tên Sản Phẩm</label>
				<input type="number" name="id" value="<?=$id?>" style="display: none;">
				<input type="text" class="form-control" name="tensp" id="tensp" >
			</div>

			<div class="form-group">
				<label for="linkimg">Link Img</label>
				<input type="text" class="form-control" name="urlimg" id="urlimg" >
			</div>
			<div class="form-group">
				<label for="gia">Gia</label>
				<input type="text" class="form-control" name="gia" id="gia" >
			</div>
			<div class="form-group">
				<label for="pwd">Trả Góp:</label>
				<input type="text" class="form-control" name="tragop" id="tragop" >
			</div>

			<div class="form-group">
				<label for="pwd">Thong Tin Chi Tiet:</label>
				<input type="text" class="form-control" name="chitiet" id="chitiet" >
			</div>


			<button class="btn btn-success" >Save</button>
		</form>

	</div>



</body>
</html>