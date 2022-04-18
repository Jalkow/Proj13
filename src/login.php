
<?php
$_SESSION['error']=0;
require_once "config.php";
$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".sha1($_POST['password'])."'";
$pre = $pdo->prepare($sql);
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     $_SESSION["error"]=1;
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('location:actu.php');//on le redirige sur la page d'accueil du site !
?>