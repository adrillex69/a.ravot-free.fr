<?php
include 'connect.php';


$post= $_REQUEST['Post'];
$Contenue = $_REQUEST['Contenue'];

$sql ="UPDATE post SET ContenuePost = ". $Contenue ." WHERE PostID = ".$post;
$stmt = $pdo->query($sql);
