
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
<title>newItem.page</title>
</head>
<body>
<?php include "userMenu.php" ?>
  <div class="container col-6 my-3">
    <div class="card">
      <div class="card-body">
      <div class="container">
          <div class="text font-weight-bold mb-3">
            <i class="fas fa-plus"></i>  Add Item
          </div>
        </div>
            <form action="../actions/item.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="custom-file small col-6 ml-5">            
                  <label for="choosePhoto" class="custom-file-label">Choose Photo</label>
                  <input type="file" name="image" id="choosePhoto" class="custom-file-input"required>
                </div>            
                    <input type="number"name="cost" id="" class="col-3 mb-2 ml-3" placeholder="cost">
              </div>          

            <div class="container col-12">
              <input type="text"name="title" id="" class="form-control mb-2" placeholder="title"required>
              <input type="text"name="author" id="" class="form-control mb-2" placeholder="author"required>          
              <input type="text"name="publisher" id="" class="form-control mb-2" placeholder="publisher"required>
              <select name="materials" id="" class="form-control mb-2" placeholder="materials">
              <option value="paperback">Book only</option>
              <option value="paperback and cd">Book with CD</option>
              </select>
            </div>

            <div class="container">
              <textarea type="text"name="information" id="" class="form-control" placeholder="information"></textarea>
            </div>
            <div class="container text-center">
              <button class="btn btn-outline-info rounded-pill w-25 mt-3" type="submit">
              Save Item
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