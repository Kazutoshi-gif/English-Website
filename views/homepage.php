<?php
include "../classes/connection.php";
include_once "../classes/user.php";

$items = new User;
$itemList = $items->getItems();
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
<style>
.horizontal-scrollable{
  width:75%;
  overflow-x: auto;  
  /* white-space: nowrap; */
}
/* .horizontal-scrollable > .row > .card {
  width:50%;
  display: inline-block; 
  float: none;
  vertical-align: top;
} */
</style>
<title>Homepage</title>
</head>
<body>
 <?php include "userMenu.php" ?>
  <main>
    
    <div class="container float-left col-3">
      <div class="card">
        <div class="card-body">
        
        <div class="card">
            <div class="card-header">About Us</div>
              <div class="card-body">
              <div class="card-text">We will be teaching you the most efficient english education.</div>
          </div>
        </div>  

        <div class="card mt-3">
          <div class="card-header">Information of our materials</div>
            <div class="card-body">
              <div class="card-title">We will be providing cd or book with cd materials.</div>
              <div class="card-text"></div>
            </div>
        </div>  

          <div class="container mt-3">
            <div class="card" style="form-control">
              <img src="../img/pexels-negative-space-34075.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  Lets Learn English!
              </div>
          </div>
        </div>

        </div>
      </div>
    </div>
   
    <div class="container col-12">
      <div class="card horizontal-scrollable">
        <div class="row flex-row flex-nowrap">
          <?php
          while ($itemDetails = $itemList->fetch_assoc()){
          ?>
            <div class="card col-3 mx-4 my-2">
              <div class="card-body">
                <img src="../img/<?= $itemDetails['img']?>"alt="" class="card-img-top width:50%">
                <div class="card-title text-truncate"><?= $itemDetails['title'] ?></div>
                <div class="card-text"><i class="fas fa-yen-sign"></i><?= $itemDetails['cost'] ?></div>
                <div class="card-text"><a href="item.php?id=<?= $itemDetails['id'] ?>">view this item</a></div>
              </div>
            </div> 
          <?php
            } 
          ?>         
        </div>                    
      </div>
    </div>           
  </main>

  <footer class="bg-info text-center w-100" style="margin-top: 135px;">
    <div class="footer-content">
      <small style="line-height:100px;">www.English Education Material.com</small>
    </div>
  </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>