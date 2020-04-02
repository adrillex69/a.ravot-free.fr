<?php
include 'connect.php';


$UserID= $_REQUEST['User_id'];

$sql ="UPDATE users SET UserType = 5 WHERE UserID = ".$UserID;
$stmt = $pdo->query($sql);

 header("location: ../admin.php");