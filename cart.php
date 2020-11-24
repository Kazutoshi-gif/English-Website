<?php
session_start();
include "connection.php";

if($ID=$_GET['cdid']){
  function getMaterial($ID){
    $sql = "SELECT cost,title,author,publisher,materials FROM text_and_cd WHERE text_and_cd.id = $ID";
    $conn = connection();
    if ($result = $conn->query($sql)) {
      return $result->fetch_assoc();
    } else {
      die("Error retrieving : " . $conn->error);
    }
  }
}elseif($ID=$_GET['bookid']){
  function getMaterial($ID){
    $sql = "SELECT cost,title,author,publisher,materials FROM `text` WHERE `text`.id = $ID";
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
<title>Cart page</title>
</head>
<body>
<?php include "adminMenu.php" ?>

 <div class="container col-12">
    <div class="card">
      <div class="card-body">

        <div class="row float-right"> 

          <div class="container border border-dark col-6 mr-3 text-center">
            <div class="number" name="cost"> 
              <h1 class="h4"><?= $row['cost']?></h1>
            </div>
          </div>

          <div class="container mt-3 ml-8 text-right">
            <a href="remove.php" class="btn btn-outline-danger">
            Remove
            </a>
          </div>

        </div>

        <div class="col-1 float-left">
          <img src="img/51gxtMazhTL.jpg" class="card-img-top" alt="text with cd">
        </div>

        <div class="container border-bottom border-dark col-5 float-left">
          <div class="text font-weight-bolder" name="title">
          <h3 class="h6"><?= $row['title']?></h3>
          </div>
        </div>

        <div class="container border-bottom border-dark col-5 float-left">
          <div class="text" name="author">
          <?= $row['author']?>
          </div>
          <div class="text" name="publisher">
          <?= $row['publisher']?>
          </div>
          <div class="text" name="materials">
          <?= $row['cost']?>
          </div>
        </div>

      </div>
    </div>
  </div>

 <div class="container col-4 mt-4 float-right">
    <div class="card">
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <a href="" class="btn btn-outline-warning">
              Checkout with Paypay
              </a>
            </div>
            <div class="col-6 text-right">
              <a href="checkout.php" class="btn btn-outline-primary">
              Checkout
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>

  <footer class="bg-info text-center w-100" style="position:absolute; bottom: 0;">
    <div class="footer-content">
      <small style="line-height:100px;">www.English Education Material.com</small>
    </div>
  </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>