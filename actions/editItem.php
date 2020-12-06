<?php
include "../classes/admin.php";
$itemID = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$information = $_POST['information'];
$publisher = $_POST['publisher'];
$materials = $_POST['materials'];
$cost = $_POST['cost'];
$imageName = $_FILES['image']['name'];

$admin = new Admin;
$admin->updateItem($itemID,$title,$author,$information,$publisher,$materials,$cost,$imageName);
?>