<?php
include "../classes/user.php";
$cost = $_POST['cost'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$materials = $_POST['materials'];
$imageName = $_POST['image'];

$item = new User;
$item->createCartItem($cost,$title, $author, $publisher, $materials,$imageName);
?>