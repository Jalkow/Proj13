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

        
        
        <h2>Actualités</h2>        

        <div class="container" id="actuCard">
            <div class="row">
            <?php for ($i=0; $maxarti > $i ; $i++) {?>
                <div id="wui" class="col-5 offset-1">
                    <div id="actu_card" class="card">
                        <img id="actu_img" src="<?php echo $arti[$i]['news_img']; ?>" class="card-img-top" alt="aie">
                        <div class="card-body" >
                            <p><?php echo $arti[$i]['news_title']; ?></p>
                        </div>
                    </div>
                    <img src="img/bulle_texte_2" alt="" id="card_buble">
                    <div id="boutonreadmore">
                        <a id="readMore"  href="<?php echo "article.php?articleNum=".$arti[$i]['id_article'];?>">Read more</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        

        <!-- trigger modal create profile card -->
        


        <?php require "footer.php";?>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>