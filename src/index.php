<html lang="en">
<head>
        <meta charset="UTF-8">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Coopni Studio</title>
    </head>
    <body>
        <?php require "header.php";?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/img_fond.jpg"></div> 
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <a href=""><img class="achat_how align-items-center" src="img/achat_how.png" alt=""></a>
                    <a href="#acceuil_bas"><img class="arrow align-items-center" src="img/arrow.png" alt=""></a>
                </div>
            </div>
        </div>

        <div id="acceuil_bas">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <img class="" src="img/bulle_texte_1.png" alt="">
                        <img class="image1 img-fluid " src="img/img_serious.jpg" alt="">
                    </div>  
                </div>
                <div class="row">
                        <div class="col-10">
                        <img src="img/bulle_texte_1.png" alt="">
                        <img class="image1" src="img/img_synop.jpg" alt="">
                        <img src="img/bulle_texte_1.png" alt="">
                        <img class="image1" src="img/img_gamep.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <?php require "footer.php";?>
        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>