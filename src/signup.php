<?php
require_once "config.php";
$check = 1;
$sql = "SELECT count(email) FROM user WHERE email=':email%'";
/*if($_POST['email'] != $_POST['confirmEmail']){
    echo "email not matching";
    require_once "inscription.php"; 
    $check = 0;
}*/
if($sql>=1 ){
  echo "this email already exist."?><a data-bs-toggle="modal" data-bs-target="#modalConnexion">Connect</a><?php  "to your account.";
}else if($check==1){
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
}
?>