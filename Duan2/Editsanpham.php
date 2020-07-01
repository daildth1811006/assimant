<?php require_once 'actionEdit.php';?>
<!DOCTYPE html>


<html>
<head>
	<title>Edit San Pham</title>
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
				<input type="text" class="form-control" name="tensp" id="tensp" value="<?=$tensp?>">
			</div>

			<div class="form-group">
				<label for="linkimg">Link Img</label>
				<input type="text" class="form-control" name="urlimg" id="urlimg" value="<?=$urlimg?>">
			</div>
			<div class="form-group">
				<label for="gia">Gia</label>
				<input type="text" class="form-control" name="gia" id="gia" value="<?=$gia?>">
			</div>
			<div class="form-group">
				<label for="pwd">Trả Góp:</label>
				<input type="text" class="form-control" name="tragop" id="tragop" value="<?=$tragop?>">
			</div>

			<div class="form-group">
				<label for="pwd">Thong Tin Chi Tiet:</label>
				<input type="text" class="form-control" name="chitiet" id="chitiet" value="<?=$chitiet?>">
			</div>


			<button class="btn btn-success" >Save</button>
		</form>

	</div>



</body>
</html>