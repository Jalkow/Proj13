<?php
require_once "config.php";

/*$destinationCard = "img/".$_FILES['profilePicture']['name'];
move_uploaded_file($_FILES['profilePicture']['tmp_name'],$destinationCard);*/

$sql = "UPDATE `actu` SET `news_title` = :NewTitle, `news_img` = :picture, `news_description` = :description WHERE `actu`.`news_title` = :title ";
$dataBinded=array(
    ':title'=> $_POST['Title'],
    ':NewTitle'=> $_POST['NewTitle'],
    ':picture'=>$_POST['Picture'],
    ':description'=>$_POST['Description']

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:actu.php');//on le redirige sur la page d'accueil du site !
?>