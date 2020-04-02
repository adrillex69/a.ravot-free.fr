<?php
include 'connect.php';


$com= $_REQUEST['com'];

$sql ="DELETE FROM commentaire WHERE CommentaireID = ".$com;
$stmt = $pdo->query($sql);
