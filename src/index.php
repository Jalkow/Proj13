<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Alkya</title>
    </head>
    <body>
        <?php

        require_once "config.php";

        $sql = "SELECT * FROM presentation"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $card = $pre->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT count(*) FROM presentation"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $cardCount = $pre->fetchAll(PDO::FETCH_ASSOC);
        $maxCard = $cardCount[0]['count(*)'];
        ?>


        <div class="card">
            <?php for ($i=0; $maxCard > $i ; $i++) {?>
            <div class="card-body">
                <img src="<?php echo $card[$i]['profil_picture']; ?>" class="card-img-top" alt="aie">   
                <a href="#"><?php echo $card[$i]['name']; ?></a>
                <a href="tesuto.php"></a>
            </div>
            <?php } ?>
        </div>



        <script src="js/jquery.js"></script>
        <script src="js/bootsrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>