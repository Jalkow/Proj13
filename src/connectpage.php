<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Roboto&display=swap" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coopni Studio</title>
    </head>
    <body>
        <?php require "header.php";?>
        
        <div class="container-fluid">
            <h1>CONNEXION</h1>

            <div class="row justify-content-center">
                <div class = "col-lg-8 col-10 connexion-form-container">
                    <div class="row">
                        <div class="col-12 other-connections-buttons">
                            <div class="google-connect">
                                <a href="">GOOGLE</a>
                            </div>
                            <div class="facebook-connect">
                                <a href="">FACEBOOK</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 connexion-form-input">
                            <div id=picto_login-black>
                                <img src="img/picto_login.png" alt="">
                            </div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 connexion-form-input">
                            <img src="img/cadenas.png" alt="">
                            <input type="text" class="form-control" placeholder="Mot de passe" aria-label="password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="connexion-form-link">
                            <a href="forgotpassword.php">Mot de passe oublié ?</a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="connexion-form-button col-lg-6 col-8">
                            <a href="">CONNEXION</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php require "footer.php";?>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>