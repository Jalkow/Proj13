<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
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


        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <?php for ($i=0; $maxCard > $i ; $i++) {?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $card[$i]['name']; ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <?php } ?>
        </div>


        <script src="js/jquery.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>