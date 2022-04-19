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
        
        <div class="row">
            <h1 class="col-6 col-lg-4 offset-1">MON PROFIL</h1>
        </div>

        <div class="user-infos-container">
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Adresse e-mail :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Confirmer e-mail :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Prénom :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nom :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Adresse :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Ville :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Code postal :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Pays :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Téléphone :</div>
                        </div>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div id="validate-row" class="row">
                <div class="modify-button col-3 col-lg-1 offset-4 offset-lg-8">
                    <a href="">MODIFIER</a>
                </div>
                <div class="validate-button col-3 col-lg-1 offset-1">
                    <a href="">VALIDER</a>
                </div>
            </div>
        </div>

        <?php require "footer.php";?>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>