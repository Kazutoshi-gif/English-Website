<?php
require_once "connection.php";
class user extends Database{
  public function getItems(){
    $sql = "SELECT id,title,cost,img FROM items";
      if ($result=$this->conn->query($sql)) {
        return $result;
      } else {
        die("Error retrieving items:".$this->conn->error);
      }
    }
    
    public function getItem($itemID){
        $sql = "SELECT id, cost,title,author,publisher,materials,information,img FROM items WHERE items.id = $itemID";
      if ($itemID=$this->conn->query($sql)) {
        return $itemID->fetch_assoc();
      }else{
        die("Error retrieving items:".$this->conn->error);
      }
    }
      
    public function createCartItem($cost, $title, $author, $publisher, $materials, $imageName){
    $sql = "INSERT INTO cart (cost,title,author,publisher,materials,img) VALUES ('$cost','$title','$author','$publisher','$materials','$imageName')";
    if($this->conn->query($sql)){
        header("location:../views/cart.php");   
      }else{
          die("Error adding cartItems.");
      }
    }
     public function getCartItem(){
      $sql="SELECT id,cost,title,author,publisher,materials,img  FROM `cart`";
      if ($itemID = $this->conn->query($sql)){
        return $itemID;
      }else{
        die("Error retrieving items:" . $this->conn->error);
      }
    }
    public function deleteItem($itemID){
      $sql= "DELETE FROM cart WHERE id=$itemID";
      if($this->conn->query($sql)){
         header("location:cart.php");
         exit;
      }else{
         die("error deleting Item:".$this->conn->error);
      }
   }

  public function createInformation($firstName, $lastName, $contactNumber, $emailAddress,$address,$postCode, $Date){
  $sql = "INSERT INTO customer_information (first_name,last_name,contact_number,email_address,`address`,post_code,`date`) VALUES ('$firstName','$lastName','$contactNumber','$emailAddress','$address','$postCode','$Date')";
  if($this->conn->query($sql)){
    header("location:../views/complete.php");
    exit;   
  }else{
      die("Error adding Information".$this->conn->error);
  }
}
public function getInformation($informationID){
    $sql = "SELECT id, first_name,last_name,contact_number,email_address,`address`,post_code,`date` FROM customer_information WHERE customer_information.id = $informationID";
  if ($informationID=$this->conn->query($sql)) {
    return $informationID->fetch_assoc();
  }else{
    die("Error retrieving information:".$this->conn->error);
  }
}

public function searchItem($findItem){
  $sql="SELECT id,cost,title,author,publisher,materials,img  FROM items WHERE title LIKE `$findItem`";
  if ($findItem = $this->conn->query($sql)){
    return $findItem;
  }else{
    die("Error finding items:" . $this->conn->error);
  }
}

}

?>