<?php

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
<title>Checkout page</title>
</head>
<body>
  <?php include "userMenu.php" ?>

    <div class="card w-50 mx-auto mb-4">
      <div class="card-header">
        <h1 class="h5">Fill in the details below to order</h1>
        </div>
        <div class="card-body">
        <form action="../actions/checkout.php" method="post">
          <label for="name">First Name</label>
            <input type="text" class="form-control" name="firstName" autofocus required>
          <br>
          <label for="name">Last Name</label>
            <input type="text" class="form-control" name="lastName" autofocus required>
          <br>
          <label for="name">Contact Number</label>
            <input type="number" class="form-control" name="contactNumber" autofocus required>
          <br>
          <label for="name">Email Address</label>
            <input type="text" class="form-control" name="emailAddress" autofocus required>
          <br>
          <label for="name">Address</label>
            <input type="text" class="form-control" name="address" autofocus required>
          <br>
          <label for="name">Post Code</label>
            <input type="number" class="form-control" name="postCode" autofocus required>
          <br>
          <label for="name">Date for arriving order</label>
            <input type="date" class="form-control" name="date" value="" autofocus required>
          <br>

          <button type="submit" name="btnRegister" class="form-control btn btn-outline-info" value="dashboard" value="">Complete</button>
        </form>
      </div>
    </div>

  <footer class="bg-info text-center w-100" style="position:relative; bottom: 0;">
    <div class="footer-content">
      <small style="line-height:100px;">www.English Education Material.com</small>
    </div>
  </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>