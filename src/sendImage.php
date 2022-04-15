<?php
require_once "config.php";


$destinationImg = "img/".$_FILES['newImage']['name']; //dossier "upload"
move_uploaded_file($_FILES['newImage']['tmp_name'],$destinationImg);

$sql = "INSERT INTO pictures(name,picture,alt) VALUES(:imageName,:img_link,:alt)";
$dataBinded=array(
    ':img_link' => $destinationImg,
    ':imageName' => $_POST['imageName'],
    ':alt' => $_POST['alt'],

);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


 ?>
