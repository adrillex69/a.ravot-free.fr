<?php
include 'connect.php';


$Commentaire= $_REQUEST['Commentaire'];
$Contenue = $_REQUEST['Contenue'];

$sql ="UPDATE commentaire SET ContenuePost = ". $Contenue ." WHERE CommentaireID = ".$Commentaire;
$stmt = $pdo->query($sql);
