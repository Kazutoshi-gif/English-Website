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
        $destination = "../img/" . basename($imageName);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){
           header("location:../views/cartList.php");   
           exit;    
        }else{
           die("Error moving photo.");
        }
      }
    }

    public function getCartItem($itemID){
      $sql="SELECT id,cost,title,author,publisher,materials,img  FROM `cart`WHERE `cart`.id=$itemID";
      if ($itemID = $this->conn->query($sql)){
        return $itemID;
      }else{
        die("Error retrieving items:" . $this->conn->error);
      }
    }
  
  // public function createCustomer($firstName, $lastName, $address, $contactNumber, $emailAddress, $postCode, $Date){
  // $sql = "INSERT INTO customer_information (firstName,lastName,`address`,contactNumber,emaileAddress,postCode,`Date`) VALUES ('$firstName', '$lastName','$address''$contactNumber','$emailAddress','$postCode','$Date')";
  // }
}



?>