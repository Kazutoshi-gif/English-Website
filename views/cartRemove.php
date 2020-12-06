<?php

include_once "../classes/user.php";
$item=new User;
$itemID=$_GET['id'];
$item->deleteItem($itemID);

?>