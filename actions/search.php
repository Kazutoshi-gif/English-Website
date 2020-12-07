<?php
include "../classes/connection.php";
include_once "../classes/user.php";
$findItem = $_POST['search'];
$item = new User;
$itemList = $item->searchItem($findItem);
?>
