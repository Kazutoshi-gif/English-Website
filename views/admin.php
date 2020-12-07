<?php
include "../classes/connection.php";
include_once "../classes/admin.php";

$item = new Admin;
$itemList = $item->getItems();
// $selectitemList = $selectitem->selectItems($itemID);

$itemID=@$_GET['id'];
$selectItemList=$item->selectItem($itemID);
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
.vertical-scrollable{
  height:350px;
  overflow-y: scroll;  
}
</style>
<title>Admin.page</title>
</head>
<body>
<?php include "userMenu.php" ?>

  <div class="container col-6 float-right mr-4">
    <div class="card">
      <div class="card-body">

        <div class="container text-right">
          <a class="btn btn-outline-info w-25 col-3" href="newItem.php">
          <i class="fas fa-plus"></i> New Item
          </a>
        </div>
        
        <div class="container border-bottom border-dark">
          <div class="text font-wight-light">
            <h2 class="h4"><i class="fas fa-list"></i> Book List</h2>
          </div>
        </div>

        <div class="container mb-2 border-dark border-bottom vertical-scrollable">
          <div class="row">
            <?php
            while ($itemDetails = $itemList->fetch_assoc()){
            // while ($itemDetails = $booksWithCDList->fetch_assoc()){
            ?> 
              <img src="../img/<?= $itemDetails['img']?>"alt="" class="col-2 width: 50% mt-3">
              <p class="text mt-3 text-truncate col-3 "><?= $itemDetails['title'] ?></p>             
              <p class="text mt-3 mr-2 col-2"><?= $itemDetails['author'] ?></p>             
              <p class="text mt-3 mr-2"><?= $itemDetails['cost'] ?></p> 
                          
              <div class="">
                <a class="btn btn-outline-warning ml-6 mr-3 mt-2 hight:40%" href="admin.php?id=<?= $itemDetails['id'] ?>">
                Edit
                </a>
                <a class="btn btn-outline-danger ml-6 mr-3 mt-3 mb-2" href="remove.php?id=<?= $itemDetails['id'] ?>">
                remove
                </a>
              </div>
            <?php
              // } 
            } 
            ?>  
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container col-6 my-3 ml-5">
    <div class="card">
      <div class="card-body">
      <div class="container">
          <div class="text font-wight-light">
            <h2 class="h4"><i class="fas fa-edit"></i> Edit Item</h2>
          </div>
        </div>
          <div class="col-4 float-left">
          <form action="../actions/edititem.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $selectItemList['id'] ?>">
              <img src="../img/<?= $selectItemList['img'] ?>" alt="<?= $selectItemList['img'] ?>" class="card-img-top" alt="text with cd">

            </div>
              <div class="custom-file small col-3">            
                <label for="choosePhoto" class="custom-file-label">Choose Photo</label>
                <input type="file" name="image" id="choosePhoto" class="custom-file-input"required>
              </div>
                
            <div class="container text-right">
              <div class="number" name="cost">
                <h1 class="h4"><input type="number"name="cost" id="" class="col-3" placeholder="cost" value="<?= $selectItemList['cost'] ?>"required></h1>
              </div>
            </div>
            
            <div class="container col-8 float-right">
              <div class="font-weight-bolder">
              <h3 class="h5"><input type="text"name="title" id="" class="form-control" placeholder="title"value="<?= $selectItemList['title'] ?>"required></h3>
              </div>
              <div class="mb-2">
              <input type="text"name="author" id="" class="form-control" placeholder="author"value="<?= $selectItemList['author'] ?>"required>
              </div>
              <div class="mb-2">
              <input type="text"name="publisher" id="" class="form-control" placeholder="publisher"value="<?= $selectItemList['publisher'] ?>"required>
              </div>
              <div class="mb-2">
              <input type="text"name="materials" id="" class="form-control" placeholder="materials"value="<?= $selectItemList['materials'] ?>"required>
              </div>
            </div>

            <div class="container">
              <textarea type="text"name="information" id="" class="form-control" placeholder="information"><?= $selectItemList['information'] ?></textarea>
            </div>
            <div class="container text-center">
              <button class="btn btn-outline-info rounded-pill w-25 mt-3"type="submit" href="admin.php">
              Save Changes
              </button>
            </div>          
        </form>
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



