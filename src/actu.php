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
        <?php
        require_once "config.php";
        require "header.php";

        $sql = "SELECT * FROM actu"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $arti = $pre->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT count(*) FROM actu"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $artiCount = $pre->fetchAll(PDO::FETCH_ASSOC);
        $maxarti = $artiCount[0]['count(*)'];
        ?>

        
        
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/media/img_fond.jpg"></div>
        <div class="container" id="actuCard">
            <div class="row">
            <?php for ($i=0; $maxarti > $i ; $i++) {?>
                <div class="col-5 offset-1">
                    <div id="actu_card" class="card">
                        <img id="actu_img" src="<?php echo $arti[$i]['news_img']; ?>" class="card-img-top" alt="aie">
                        <div class="card-body" >
                            <p><?php echo $arti[$i]['news_title']; ?></p>
                        </div>
                    </div>
                    <img src="img/media/bulle_texte_2" alt="" id="card_buble">
                    <div id="boutonreadmore">
                        <a id="readMore" class="left" href="<?php echo "article.php?articleNum=".$arti[$i]['id_article'];?>">Read more</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/media/img_fond.jpg"></div>
   




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
        </div>

        <!-- trigger modal delete profile card -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDel">
            del news
        </button>
        <!-- modal delete profile card -->
        <div class="modal fade" id="modalDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php require_once "deleteNews.php"; ?>
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