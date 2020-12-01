<?php
include "../classes/user.php";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$contactNumber = $_POST['contactNumber'];
$emailAddress = $_POST['emailAddress'];
$postCode= $_POST['postCode'];
$Date= $_POST['Date'];

$item = new User;
$item->createCustomer($firstName,$lastName, $address, $contactNumber, $emailAddress,$postCode,$Date);

?>