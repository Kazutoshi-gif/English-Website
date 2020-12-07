<?php
include "../classes/connection.php";
include_once "../classes/user.php";

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
<title>search page</title>
</head>
<body>
<?php include "userMenu.php" ?>

<?php
  while ($itemDetails = $itemList->fetch_assoc()){
  ?>
 <div class="container col-12 mb-2">
    <div class="card">
      <div class="card-body">

        <div class="row float-right"> 
          <div class="container border border-dark col-6 mr-3 text-center">
            <div class="number"> 
              <h1 class="h5"><i class="fas fa-yen-sign"></i><?= $itemDetails['cost']?></h1>
            </div>
          </div>

          <div class="container mt-3 ml-8 text-right">
            <a href="cartRemove.php?id=<?= $itemDetails['id'] ?>" class="btn btn-outline-danger">
            Remove
            </a>
          </div>
        </div>

        <div class="col-1 float-left">
        <img src="../img/<?= $itemDetails['img']?>" class="card-img-top" alt="text with cd">
        </div>

        <div class="container border-bottom border-dark col-5 float-left">
          <div class="text font-weight-bolder">
          <h3 class="h6"><?= $itemDetails['title']?></h3>
          </div>
        </div>

        <div class="container border-bottom border-dark col-5 float-left">
          <div class="text">
          <?= $itemDetails['author']?>
          </div>
          <div class="text">
          <?= $itemDetails['publisher']?>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php
        } 
      ?>           

 <div class="container col-2 mt-2 float-right mb-3">
    <div class="card">
      <div class="card-body">
        <div class="container">
          <div class="row">
            <!-- <div class="col-6">
              <a href="" class="btn btn-outline-warning<?= $itemDetails['id']?>">
              Checkout with Paypay
              </a>
            </div> -->
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