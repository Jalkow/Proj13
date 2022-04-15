<?php
require_once "config.php";
$check = 1;
if($_POST['email'] != $_POST['confirmEmail']){
    
    $_SESSION['errorMail'] = "wui"
    $check = 0;
}else{
    $sql = "SELECT count(email) FROM user WHERE email=':email'";
    if($sql>=1 ){
        echo "this email already exist."?><a data-bs-toggle="modal" data-bs-target="#modalConnexion">Connect</a><?php  "to your account.";
    }
    else{
        if($sql==0 && $check==1){
        $sql = "INSERT INTO user(email,password,name,last_name,adress,city,postal_code,country,phone) VALUES(:email,sha1(:password),:name,:lastName,:adress,:city,:postalCode,:country,:phone)";
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
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
      
        if(!($pre->execute($dataBinded))){
            trigger_error("PDO errorinfo: ".$pdo->errorInfo());
            return;
        }
        
        //header('location:actu.php');//on le redirige sur la page d'accueil du site !
        }
    }
}

?>

<div class="modal fade" id="modalConnexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php require_once "connexion.php"; ?>
        </div>
    </div>
</div>

<div class="modal fade" id="modalInscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php require_once "inscription.php"; ?>
        </div>
    </div>
</div>
<div class="modal fade" id="wui" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo $sql; ?>
        </div>
    </div>
</div>
