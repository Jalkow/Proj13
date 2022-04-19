<?php
require_once "config.php";/*
$check = 1;
if($_POST['email'] != $_POST['confirmEmail']){
    
    $_SESSION['errorMail'] = "wui"
    $check = 0;
}else{
    $sql = "SELECT count(email) FROM user WHERE email=':email'";
    if($sql==0){*/
    $sql = "INSERT INTO user(email,password,name,last_name,adress,city,postal_code,country,phone) VALUES(:email,sha1(:password),:name,:lastName,:adress,:city,:postalCode,:country,:phone)";
    $pre = $pdo->prepare($sql);
    
    $dataBinded=array(
        ':email'=> $_POST['email'],
        ':password'=> $_POST['password'],
        ':name'=> $_POST['userName'],
        ':lastName'=> $_POST['userLastName'],
        ':country'=> $_POST['country'],
        ':city'=> $_POST['city'],
        ':postalCode'=> $_POST['postalCode'],
        ':adress'=> $_POST['adress'],
        ':phone'=> $_POST['phone'],
    );
    $pre->execute($dataBinded);
    if(!($pre->execute($dataBinded))){
        trigger_error("PDO errorinfo: ".$pdo->errorInfo());
        return;
    }
    header('location:actu.php');//on le redirige sur la page d'accueil du site !
//}

?>


