<!DOCTYPE html>
<?php

require_once 'db.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql_id = 'select * from sanpham where id =' . $id;
	$id_sanpham = execute_result($sql_id);
	$tensp = $id_sanpham[0]['tensp'];
	$urlimg = $id_sanpham[0]['urlimg'];
	$gia = $id_sanpham[0]['gia'];
	$tragop = $id_sanpham[0]['tragop'];
	$chitiet = $id_sanpham[0]['chitiet'];
	//echo ;
}
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.p1{
		 font-weight:bold;
	}
</style>
</head>
<body>

	<div class="container">

<h1 style="margin-top: 50px;"><center>Thông Tin Sản Phẩm</center></h1>

		</div>
		<div class="row" style="margin-top: 50px">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
				<img src=<?=$urlimg?> class="card-img-top editing" alt="...">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" margin-top:30px">
				<p class="p1"><?=$tensp?></p>
				<p class="p1"><?=$gia?></p>
				<p class="p1" style="color:red"><?=$tragop?></p>
				<p>Chi tiet san pham</p>
				<p><?=$chitiet?></p>

			</div>
		</div>


	</div>
</div>
</body>
</html>