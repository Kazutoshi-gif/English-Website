<?php
include "../classes/connection.php";
include_once "../classes/user.php";


$item = new User;
$itemID=@$_GET['id'];
$itemDetails = $item->getItem($itemID);

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
    <form action="../actions/newItem.php" method="POST" enctype="multipart/form-data">

        <div class="container border-bottom border-dark">
          <div class="number" name="cost">
          <input type="hidden" name="cost" value="<?= $itemDetails['cost']?>">
            <h1 class="h3"><i class="fas fa-yen-sign"></i><?= $itemDetails['cost']?></h1>
          </div>
        </div>

        <div class="container border-bottom border-dark">
          <div class="text font-wight-light">
            <h2 class="h4"><i class="fas fa-truck"></i> Free Delivary</h2>
          </div>
        </div>

        <div class="container text-center mt-3 mb-2">
          <button class="btn btn-warning rounded-pill w-50" type="submit" href="cart.php" name="id" value="<?= $itemDetails['id'] ?>">
          Add to Cart
          </button>
        </div>
        <!-- value="<?= $itemDetails['id'] ?>" -->
        <div class="container text-center">
          <button class="btn btn-outline-dark rounded-pill w-50 mt-3"type="submit"href="whisList.php?id<?= $itemDetails['id'] ?>">
          Add to Whish list
          </button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container col-6 my-3 ml-5">
    <div class="card">
      <div class="card-body">
        <div class="col-4 float-left">
        <input type="hidden" name="image" value="<?= $itemDetails['img']?>">
          <img src="../img/<?= $itemDetails['img']?>" class="card-img-top" alt="text with cd">
        </div>
        
          <div class="container border-bottom border-dark col-8 float-right">
            <div class="text font-weight-bolder">
            <input type="hidden"name="title"  value="<?= $itemDetails['title']?>">
            <h3 class="h5"><?= $itemDetails['title']?></h3>
            </div>
          </div>

          <div class="container border-bottom border-dark col-8 float-right">
            <div class="text">
            <input type="hidden" name="author" value="<?= $itemDetails['author']?>">
            <?= $itemDetails['author']?>
            </div>
            <div class="text">
            <input type="hidden"name="publisher"  value="<?= $itemDetails['publisher']?>">
            <?= $itemDetails['publisher']?>
            </div>
            <div class="text">
            <input type="hidden"name="materials"  value="<?= $itemDetails['materials']?>">
            <?= $itemDetails['materials']?>
            </div>
          </div>

        </form>
          <div class="container">
            <div class="textarea">
            <?= $itemDetails['information']?>
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