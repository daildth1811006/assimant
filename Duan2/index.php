<!DOCTYPE html>
<?php
require_once 'db.php';
$sql = "select * from sanpham";

$sanpham = execute_result($sql);
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
</head>
<body>

  <div class="container">


    <div id="header" style="width: 100%">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/content1.png.jfif" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/tgdd.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/ttgd2.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <?php

echo '<div class="row "style="height: 100px, margin:0;margin: 0px; margin-top: 20px;">';
for ($i = 0; $i < 4; $i++) {
	echo '
     <div class="col-sm-3 col-md-3  align-self-sm-center">
     <div class="card">
     <img src=' . $sanpham[$i]['urlimg'] . ' class="card-img-top editing" alt="...">
     <div class="card-body">
     <a href="" class="card-title">' . $sanpham[$i]['tensp'] . '</a>
     <p class="card-text">' . $sanpham[$i]['tragop'] . '</p>
     <p id="price">' . $sanpham[$i]['gia'] . '</p>
     <p id="PhoneID" style="display: none;">' . $sanpham[$i]['id'] . '</p>
     <button id="addtocard" class="btn btn-primary" onclick=\'window.open("chitiet.php?id=' . $sanpham[$i]['id'] . '","_self")\'>Xem them </button>
     </div>
     </div>
     </div>
     ';
}
echo '</div>';

?>

   <script type="text/javascript">

    function addID(id){
      var link = "detailProduct.php?id='"+id+"'";
      window.open(link);
    }
  </script>


</div>
</div>
</body>
</html>