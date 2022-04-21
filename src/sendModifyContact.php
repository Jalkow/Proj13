<?php
require_once "config.php";
$sql = "SELECT * FROM contact";
$pre = $pdo->prepare($sql);
$pre->execute();
$oldpage = current($pre->fetchAll(PDO::FETCH_ASSOC));


$newImages = [];

$newImages[] = $oldpage['img1'];
$newImages[] = $oldpage['img2'];


for($i = 0; $i <1; $i++){
    if($_FILES['images']['name'][$i] != ""){
        $newImages[$i] = $_FILES['images']['name'][$i];
        $destination = "img/".$_FILES['images']['name'][$i];
        $source = $_FILES['images']['tmp_name'][$i];
        if(!file_exists($destination)){
            if(!move_uploaded_file($source,$destination)){
                trigger_error("failed to move ".$source." to ".$destination);
                return;
            }
        }
    }
}

$sql = "UPDATE contact 
        SET text1 = :text1, text2 = :text2, img1 = :img1,
            img2 = :img2, phone = :phone, email = :email,
            emailSAV = :emailSAV, linkedin = :linkedin";

$databinded = array(
                ':text1' => $_POST['text1'],
                ':text2' => $_POST['text2'],
                ':img1' => $newImages[0],
                ':img2' => $newImages[1],
                ':phone' => $_POST['phone'],
                ':email' => $_POST['email'],
                ':emailSAV' => $_POST['emailSAV'],
                ':linkedin' => $_POST['linkedin']
);

$pre = $pdo->prepare($sql);
if(!$pre->execute($databinded)){
    trigger_error("PDO errorInfo: ".$pdo->errorInfo());
    return;
}

header('Location:index.php');
?>