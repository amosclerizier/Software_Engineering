<?php
include_once '../classes/accountHandler.php';

$accountHandler = new accountHandler();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$success = $accountHandler->createAccount($firstName, $lastName, $email, $password);

if ($success) echo 1;
else echo 0;
?>