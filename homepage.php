<?php
session_start();
include "connection.php";

function getCd(){

  $sql = "SELECT id,title,cost FROM text_and_cd";
  $conn = connection();
  if ($result = $conn->query($sql)) {
    return $result;
  } else {
    die("Error retrieving posts: " . $conn->error);
  }
}

function getBook(){

  $sql = "SELECT id,title,cost FROM `text`";
  $conn = connection();
  if ($result = $conn->query($sql)) {
    return $result;
  } else {
    die("Error retrieving posts: " . $conn->error);
  }
}

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
<title>Homepage</title>
</head>
<body>
 <?php include "adminMenu.php" ?>
  <main>
    
    <div class="container float-left col-3">
      <div class="card">
        <div class="card-body">
        
        <div class="card">
            <div class="card-header">About Us</div>
              <div class="card-body">
              <div class="card-text">we will be providing you the most effincial english materials</div>
          </div>
        </div>  

        <div class="card mt-3">
          <div class="card-header">Information of our materials</div>
            <div class="card-body">
              <div class="card-title">cd</div>
              <div class="card-text"></div>
            </div>
        </div>  

          <div class="container mt-3">
            <div class="card" style="form-control">
              <img src="img/pexels-negative-space-34075.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  
                </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  
    <div class="container col-12">
      <div class="card">
        <div class="card-deck mx-3 my-3">
          <?php
          $result = getCd();
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
          ?>
        <div class="card">
          <div class="card-body">
            <div class="card-title"><?= $row['title'] ?></div>
            <div class="card-text"><i class="fas fa-yen-sign"></i><?= $row['cost'] ?></div>
            <div class="card-text"><a href="item.php?cdid=<?= $row['id'] ?>">view this item</a></div>
          </div>
        </div> 

          <?php
               }
            } 
          ?>             
        </div>                    
      </div>
    </div>                   

    <div class="container col-12">
      <div class="card">
        <div class="card-deck mx-3 my-3">
          <?php
          $result = getBook();
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
          ?>
        <div class="card">
          <div class="card-body">
            <div class="card-title"><?= $row['title'] ?></div>
            <div class="card-text"><i class="fas fa-yen-sign"></i><?= $row['cost'] ?></div>
            <div class="card-text"><a href="item.php?bookid=<?= $row['id'] ?>">view this item</a></div>
          </div>
        </div> 

          <?php
               }
            } 
          ?>             
        </div>                    
      </div>
    </div>                   

   
<!-- 
    <div class="container my-3 mr-5 col-3 w-75">
      <div class="card border" style="form-control">
        <div class="card-deck mx-3 my-3">
          <img src="img/pexels-negative-space-34075.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              advertisement
            </div>
        </div>
      </div>
    </div> -->

  </main>

  <footer class="bg-info text-center w-100" style="margin-top: 50px;">
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