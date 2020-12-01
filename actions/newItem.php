<?php
include "../classes/user.php";
$cost = $_POST['cost'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$materials = $_POST['materials'];
$imageName = $_FILES['image']['name'];

$item = new User;
$item->createCartItem($cost,$title, $author, $publisher, $materials,$imageName);