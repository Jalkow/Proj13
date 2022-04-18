<?php
require_once "config.php";
$dataBinded = array(':articletodelete' => $_POST['articletodelete']);
$sql = "DELETE FROM actu WHERE news_title = :articletodelete";
$pre = $pdo->prepare($sql);
$pre -> execute();


if(!($pre->execute($dataBinded))){
    trigger_error("PDO errorinfo: ".$pdo->errorInfo());
    return;
}
$sql = "ALTER TABLE `actu` auto_increment = 1";
$pre = $pdo->prepare($sql);
$pre -> execute();

header("location:actu.php");

 ?>