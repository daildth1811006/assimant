<?php
require_once 'db.php';
$query = 'select * from sanpham';
$sanpham = execute_result($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<h1 style="margin-top:50px; margin-bottom: 30px "><center>Admin</center></h1>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>TenSP</th>
							<th>Link Image</th>
							<th>Gia</th>
							<th>Tra Gop</th>
							<th>Thong tin chi tiet</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
						<?php

$index = 1;
foreach ($sanpham as $sp) {
	echo '<tr>
							<td>' . ($index++) . '</td>
							<td>' . $sp['tensp'] . '</td>
							<td>' . $sp['urlimg'] . '</td>
							<td>' . $sp['gia'] . '</td>
							<td>' . $sp['tragop'] . '</td>
							<td>' . $sp['chitiet'] . '</td>
							<td><button class="btn btn-warning" onclick=\'window.open("Editsanpham.php?id=' . $sp['id'] . '","_self")\'>Edit</button></td>
							<td><button class="btn btn-danger" onclick="xoa(' . $sp['id'] . ')">Xoa</button></td>
							</tr>';
}
?>
					</tbody>
				</table>
				<button class="btn btn-success" onclick="window.open('addsanpham.php', '_self')">Them San Pham</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function xoa(id){
			option = confirm('Ban co muon xoa san pham nay ko')

			if(!option) {
				return;
			}
			console.log(id)
			$.post('xoa.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>

</body>
</html>