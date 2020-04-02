<?php
include 'connect.php';


$UserID= $_REQUEST['UserID'];
$UserType = $_REQUEST['UserType'];

$sql ="UPDATE users SET UserType = ". $UserType ." WHERE UserID = ".$UserID;
$stmt = $pdo->query($sql);
