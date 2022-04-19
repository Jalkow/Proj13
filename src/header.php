<div class="main-menu">
    <a class="logo nav-link" href="#">
        <picture>
            <source class="img-fluid" media="(min-width: 1024px)" srcset="img/img_logo2.png" alt="logo Coopni Studio PC">
            <source class="img-fluid" media="(max-width: 1024px)" srcset="img/img_logo1.png" alt="logo Coopni Studio Phone">
            <img class="img-fluid" src="img/facebook.png" alt="test">
        </picture>
    </a>
    <a class="nav-link" href="index.php">Home</a>
    <a class="nav-link" href="actu.php">Actualités</a>
    <a class="nav-link" href="contact.php">Contact</a>
    <div class="main-menu-icons">
        <a class="nav-link" href="">
            <img src="img/panier_blanc.png" alt="cart icon">
        </a>        
        <?php
        $_hrefValue;
        if(isset($_SESSION['user'])){ 
            $_hrefValue = "account.php";
        }
        else{ 
            $_hrefValue = "connect-menu.php" ;
        }
        ?>

        <div class="dropdown">
            <a href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/picto_login.png" alt="login icon">
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php if(isset($_SESSION['user'])){ ?><li><a id="username"><?php echo $_SESSION['user']['name'] ?></a></li> <?php } ?>
                <?php if(isset($_SESSION['user'])){ ?> <li><a class="dropdown-item" href="profile.php">Profile</a></li> <?php }else{ ?> <li><a class="dropdown-item" href="connect-menu.php">Connexion</a></li> <?php } ?>
                
                <li><a class="dropdown-item" href="#">Order</a></li>
            </ul>
        </div>
    </div>
    
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
    <?php

    if(isset($_SESSION['user'])){
        //check if admin or not
        if($_SESSION['user']['admin']==2){?>
            <a class="btn btn-success" href="adminPanel.php">admin panel</a>
    <?php
        }
    }
    ?>

</div>