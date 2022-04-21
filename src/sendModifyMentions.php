<?php
require_once "config.php";
$sql = "SELECT * FROM mentions";
$pre = $pdo->prepare($sql);
$pre->execute();
$oldpage = current($pre->fetchAll(PDO::FETCH_ASSOC));


$newImage = [$oldpage['logo']];

if($_FILES['logo']['name'] != ""){
    $newImage[0] = $_FILES['logo']['name'];
    $destination = "img/".$_FILES['logo']['name'];
    $source = $_FILES['logo']['tmp_name'];
    if(!file_exists($destination)){
        if(!move_uploaded_file($source,$destination)){
            trigger_error("failed to move ".$source." to ".$destination);
            return;
        }
    }
}


$sql = "UPDATE mentions 
        SET title = :title, text = :text, logo = :logo";

$databinded = array(
                ':title' => $_POST['title'],
                ':text' => $_POST['text'],
                ':logo' => $newImage[0]
);

$pre = $pdo->prepare($sql);
if(!$pre->execute($databinded)){
    trigger_error("PDO errorInfo: ".$pdo->errorInfo());
    return;
}

header('Location:index.php');
?>