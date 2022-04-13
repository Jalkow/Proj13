<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Coopni</title>
    </head>
    <body>
        <?php

        require_once "config.php";

        $sql = "SELECT * FROM actu"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $card = $pre->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT count(*) FROM actu"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $cardCount = $pre->fetchAll(PDO::FETCH_ASSOC);
        $maxCard = $cardCount[0]['count(*)'];
        ?>

        
        
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/media/img_fond.jpg"></div>
        <div class="container" id="actuCard">
            <div class="row">
            <?php for ($i=0; $maxCard > $i ; $i++) {?>
                <div class="col-5 offset-1">
                    <div class="card">
                        <img src="<?php echo $card[$i]['news_img']; ?>" class="card-img-top" alt="aie">
                        <div class="card-body" >
                            <p><?php echo $card[$i]['news_title']; ?></p>
                        </div>
                    </div>
                    <img src="img/media/bulle_texte_2" alt="" id="card_buble">
                    <button type="button" class="btn btn-primary">Read more</button>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/media/img_fond.jpg"></div>
        <div id="transi">

        </div>
       




        <!-- trigger modal create profile card -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalnews">
            add news
        </button>
        <!-- modal create profile card -->
        <div class="modal fade" id="modalnews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php require_once "createNews.php"; ?>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#footer" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>

        <!-- trigger modal delete profile card -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelnews">
            del news
        </button>
        <!-- modal delete profile card -->
        <div class="modal fade" id="modalDelnews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php require_once "deleteNews.php"; ?>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#footer" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>



        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>