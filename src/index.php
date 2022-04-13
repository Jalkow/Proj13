<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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

        <div class="container">
            <div class="row">
            <?php for ($i=0; $maxCard > $i ; $i++) {?>
                <div class="col-sm-1 col-md-4 col-lg-4 offset-sm-1 offset-md-2 offset-lg-1">
                    <div class="card">
                        <img src="<?php echo $card[$i]['news_img']; ?>" class="card-img-top" alt="aie" >   
                        <div class="card-body" >
                            <a href="tesuto.php"><?php echo $card[$i]['news_title']; ?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        <script src="js/jquery.js"></script>
        <script src="js/bootsrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>