<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once 'db.php';
	$sql = 'delete from sanpham where id = ' . $id;
	execute($sql);

	echo 'Xoá  thanh cong';
}