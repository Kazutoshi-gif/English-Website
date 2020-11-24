<?php
session_start();
include "connection.php";

if($ID=$_GET['cdid']){
  function getMaterial($ID){
    $sql = "SELECT cost,title,author,publisher,materials,information FROM text_and_cd WHERE text_and_cd.id = $ID";
    $conn = connection();
    if ($result = $conn->query($sql)) {
      return $result->fetch_assoc();
    } else {
      die("Error retrieving : " . $conn->error);
    }
  }
}elseif($ID=$_GET['bookid']){
  function getMaterial($ID){
    $sql = "SELECT cost,title,author,publisher,materials,information FROM `text` WHERE `text`.id = $ID";
    $conn = connection();
    if ($result = $conn->query($sql)) {
      return $result->fetch_assoc();
    } else {
      die("Error retrieving: " . $conn->error);
    }
  }
}
  $row = getMaterial($ID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Item page</title>
</head>
<body>
<?php include "adminMenu.php" ?>

  <div class="container col-5 float-right mr-4">
    <div class="card">
      <div class="card-body">

        <div class="container border-bottom border-dark">
          <div class="number" name="cost">
            <h1 class="h3"><i class="fas fa-yen-sign"></i><?= $row['cost']?></h1>
          </div>
        </div>

        <div class="container border-bottom border-dark">
          <div class="text font-wight-light">
            <h2 class="h4"><i class="fas fa-truck"></i> Free Delivary</h2>
          </div>
        </div>

        <div class="container text-center mt-3 mb-2">
          <a class="btn btn-warning rounded-pill w-50" href="cart.php?cdid&bookid=<?= $row['id'] ?>">
          Add to Cart
          </a>
        </div>

        <div class="container text-center">
          <a class="btn btn-outline-dark rounded-pill w-50 mt-3"href="whisList.php">
          Add to Whish list
          </a>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container col-6 my-3 ml-5">
    <div class="card">
      <div class="card-body">

        <div class="col-4 float-left">
          <img src="img/51gxtMazhTL.jpg" class="card-img-top" alt="text with cd">
        </div>

          <div class="container border-bottom border-dark col-8 float-right">
            <div class="text font-weight-bolder" name="title">
            <h3 class="h5"><?= $row['title']?></h3>
            </div>
          </div>

          <div class="container border-bottom border-dark col-8 float-right">
            <div class="text" name="author">
            <?= $row['author']?>
            </div>
            <div class="text" name="publisher">
            <?= $row['publisher']?>
            </div>
            <div class="text" name="materials">
            <?= $row['materials']?>
            </div>
          </div>

          <div class="container">
            <div class="textarea" name="information">
            <?= $row['information']?>
            </div>
          </div>

      </div>
    </div>
  </div>

  <footer class="bg-info text-center w-100" style="margin-top: 100px;">
    <div class="footer-content">
      <small style="line-height:100px;">www.English Education Material.com</small>
    </div>
  </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>