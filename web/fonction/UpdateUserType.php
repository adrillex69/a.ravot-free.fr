<?php
include 'connect.php';


$TYPEID= $_REQUEST['TYPEID'];
$Modification = $_REQUEST['UserType'];
$Ecriture = $_REQUEST['Ecriture'];
$GestionPost = $_REQUEST['GestionPost'];
$GestionUser = $_REQUEST['GestionUser'];


$sql ="UPDATE usertype SET Modification = ". $Modification ." , Ecriture =".$Ecriture.", GestionPost = ".$GestionPost." , GestionUser = ".$GestionUser." WHERE TYPEID = ".$TYPEID;
$stmt = $pdo->query($sql);
