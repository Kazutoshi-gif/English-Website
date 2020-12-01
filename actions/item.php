<?php
include "../classes/admin.php";
$cost = $_POST['cost'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$materials = $_POST['materials'];
$information = $_POST['information'];
$imageName = $_FILES['image']['name'];

$admin = new Admin;
$admin->createItem($cost,$title, $author, $publisher, $materials,$information,$imageName);