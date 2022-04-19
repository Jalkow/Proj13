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
        if(isset($_SESSION['user'])){ ?>
            <div class="dropdown">
                <a href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/picto_login.png" alt="login icon">
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="profile.php"><?php echo $_SESSION['user']['name'] ?></a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    <li><a class="dropdown-item" href="#">Order</a></li>
                </ul>
            </div>
        <?php } 
        else{ ?>
            <a class="nav-link" href="connect-menu.php">
                <img src="img/picto_login.png" alt="login icon">
            </a>
        <?php } ?>
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