<?php
include 'connect.php';


$UserID= $_REQUEST['UserID'];
$UserType = $_REQUEST['UserType'];
$pwd = $_REQUEST['pwd'];
$desc = $_REQUEST['desc'];
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];

$sql ="UPDATE users SET UserType = ". $UserType ." , Password =".$pwd.", Description = ".$desc." , Nom = ".$nom." , Prenom=".$prenom." WHERE UserID = ".$UserID;
$stmt = $pdo->query($sql);
