<?php
include "../classes/user.php";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contactNumber = $_POST['contactNumber'];
$emailAddress = $_POST['emailAddress'];
$address = $_POST['address'];
$postCode= $_POST['postCode'];
$Date= $_POST['date'];

$item = new User;
$item->createInformation($firstName,$lastName,$contactNumber, $emailAddress,$address,$postCode,$Date);

?>