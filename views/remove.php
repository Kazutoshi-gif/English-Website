<?php

include_once "../classes/admin.php";
$item=new Admin;
$itemID=$_GET['id'];
$item->deleteItem($itemID);

?>