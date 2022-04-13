<?php
require_once "config.php";

$sql = "DELETE FROM actu WHERE news_title = '".$_POST['Title']."'";
$pre = $pdo->prepare($sql);
$pre -> execute();



header("location:actu.php");

 ?>