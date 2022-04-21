<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Coopni Studio</title>
    </head>
    <body>
        <?php require_once "config.php";
         require "header.php";
        $sql = "SELECT * FROM accueil"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $acu = $pre->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="parallax-window" data-parallax="scroll" data-image-src="img/<?php echo $acu[0]['parallax_img']; ?>">
            <div id="accueil-game-logo">
                <img src="img/<?php echo $acu[0]['parallax_logo']; ?>" alt="logo how about">
            </div>
            <div id="accueil-parallax-bottomrow" class="row">
                <a id="accueil-parallax-arrow" class="col-3 col-lg-2 offset-5" href="#accueil-first-section">
                    <img src="img/arrow.png" alt="">
                </a>
                <div id="accueil-parallax-button" class="offset-1 col-3 col-lg-1 offset-lg-3">
                    <a href="achat.php">ACHETER</a>
                </div>
            </div>
        </div> 

        <div class="container-fluid">
            <div class="accueil-section" id="accueil-first-section">
                <div class="row">
                    <h2 class="col-6"><?php echo $acu[0]['title1']; ?></h2>
                    <div class="col-6">
                        <img class="col-6" src="img/<?php echo $acu[0]['image1']; ?>" alt="serieux jeu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-lg-4 offset-lg-3 accueil-section-text">
                        <p><?php echo $acu[0]['paragraph1']; ?></p>
                    </div>
                </div>
            </div>

            <div class="accueil-section" id="accueil-second-section">
                <div class="row">
                    <div class="col-6">
                        <img class="col-6" src="img/<?php echo $acu[0]['image2']; ?>" alt="jeu synop">
                    </div>
                    <div class="col-6 accueil-section-titlecol">
                        <h2><?php echo $acu[0]['title2']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 col-lg-4 offset-4 offset-lg-5 accueil-section-text">
                        <p><?php echo $acu[0]['paragraph2']; ?></p>
                    </div>
                </div>
            </div>

            <div class="accueil-section" id="accueil-last-section">
                <div class="row">
                    <div class="col-6 accueil-section-titlecol">
                        <h2><?php echo $acu[0]['title3']; ?></h2>
                    </div>
                    <div class="col-6">
                        <img class="col-6" src="img/<?php echo $acu[0]['image3']; ?>" alt="narratif jeu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 col-lg-4 offset-lg-3 accueil-section-text">
                        <p><?php echo $acu[0]['paragraph3']; ?></p>
                    </div>
                </div>
            </div>

            <a id="accueil-buybutton" href="achat.php">COMMANDER MAINTENANT</a>
        </div>
        

        <div id="acceuil_bas">

        </div>

        <?php require "footer.php";?>
        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>