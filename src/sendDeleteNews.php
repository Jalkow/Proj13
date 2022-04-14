<?php
require_once "config.php";

$sql = "DELETE FROM actu WHERE news_title = :articletodelete";
$pre = $pdo->prepare($sql);
$pre -> execute();

$dataBinded = array(':articletodelete' => $_POST['articletodelete']);
if(!($pre->execute($dataBinded))){
    trigger_error("PDO errorinfo: ".$pdo->errorInfo());
    return;
}

header("location:actu.php");

 ?>