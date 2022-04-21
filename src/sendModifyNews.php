<?php
require_once "config.php";

/*$destinationCard = "img/".$_FILES['profilePicture']['name'];
move_uploaded_file($_FILES['profilePicture']['tmp_name'],$destinationCard);*/

$sql = "UPDATE INTO actu(news_title,news_img,news_description) VALUES(:title,:picture,:description)";
$dataBinded=array(
    ':title'=> $_POST['Title'],
    ':picture'=>$_POST['Picture'],
    ':description'=>$_POST['Description']

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:actu.php');//on le redirige sur la page d'accueil du site !
?>