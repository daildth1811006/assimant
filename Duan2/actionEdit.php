
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

	//update
	$sql = "update sanpham set tensp = '$s_tensp', urlimg = '$s_urlimg', gia = '$s_gia',tragop='$s_tragop',chitiet='$s_chitiet' where id = " . $s_id;

	//insert
	//$sql = "insert into product(tieude, linkimg, price,tragop,detail) value ('$s_tieude', '$s_linkimg', '$s_price','$s_tragop','$s_detail')";

	echo $sql;
	execute($sql);

	header('Location: admin.php');
	die();
}

$id = '';

$tieude = $linkimg = $price = $tragop = $detail = '';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = 'select * from sanpham where id = ' . $id;
	//echo $sql;
	$productList = execute_result($sql);
	if ($productList != null && count($productList) > 0) {
		$std = $productList[0];
		$tensp = $std['tensp'];
		$urlimg = $std['urlimg'];
		$gia = $std['gia'];
		$tragop = $std['tragop'];
		$chitiet = $std['chitiet'];
	} else {
		$id = '';
	}
}
?>