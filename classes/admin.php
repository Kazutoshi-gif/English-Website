<?php

require_once "connection.php";
class Admin extends Database{
   public function createItem($cost,$title,$author,$publisher,$materials,$information,$imageName){
         $sql="INSERT INTO `items`(cost,title,author,publisher,materials,information,img ) values 
         ('$cost','$title','$author','$publisher','$materials','$information','$imageName')"; 

      if($this->conn->query($sql)){
         $destination = "../img/" . basename($imageName);
         if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){
            header("location:../views/admin.php");   
            exit;    
         }else{
            die("Error moving photo.");
         }
      }else{
         die("Error creating item:".$this->conn->error);
      }     
   }     
   
   public function selectItems($itemID){  
      $sql = "SELECT*FROM items WHERE items.id = '$itemID'";
      if($itemID=$this->conn->query($sql)){
         return $itemID->fetch_assoc();         
         exit;    
      }else{
         die("Error selecting item:".$this->conn->error);
      }      
   }  

   public function getItems(){  
      $sql = "SELECT id,img, title, author, cost FROM items";
      if($itemsList=$this->conn->query($sql)){
         return $itemsList;        
         exit;    
      }else{
         die("Error selecting list:".$this->conn->error);
      }      
   }  

   public function selectItem($itemID){  
      $sql = "SELECT*FROM items WHERE id = '$itemID'";
      if($itemID=$this->conn->query($sql)){
         return $itemID->fetch_assoc();         
         exit;    
      }else{
         die("Error selecting item:".$this->conn->error);
      }      
   }  

   public function updateItem($itemID,$title,$author,$information,$publisher,$materials,$cost,$imageName){
      $sql="UPDATE items SET title='$title',author='$author',information='$information',publisher='$publisher',materials='$materials',cost='$cost',img='$imageName' WHERE id='$itemID'";
      
      if($this->conn->query($sql)){
         $destination = "../img/" . basename($imageName);
         if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){
            header("location:../views/admin.php");
            exit;
         }else{
            die("Error moving photo.");
         }
      }else{
        die("Error updating Item:".$this->conn->error);
      }
   }

   public function deleteItem($itemID){
      $sql= "DELETE FROM items WHERE id=$itemID";
      if($this->conn->query($sql)){
         header("location:admin.php");
         exit;
      }else{
         die("error deleting Item:".$this->conn->error);
      }
   }
}
?>
