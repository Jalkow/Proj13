<html lang="en">
 <?php require_once "config.php"; ?>
    <head>
        <meta charset="UTF-8">
        <!-- google font -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title><?php echo $article[$i]['news_title'];?></title>
    </head>
    <body>
        <?php
        require "header.php";

        $articleId = $_GET['articleNum'];
        $sql ="SELECT * FROM actu WHERE id_article LIKE $articleId" ; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $article = $pre->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT count(*) FROM actu WHERE id_article LIKE $articleId"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $artiCount = $pre->fetchAll(PDO::FETCH_ASSOC);
        $maxarti = $artiCount[0]['count(*)'];
        ?>

        <div class="container" id="artiCard">
            <div class="row">
                <div class="col-10 offset-1">
                    <div id="article_card" class="card">
                        <img id="article_img" src="<?php echo $article[0]['news_img']; ?>" class="card-img-top" alt="aie">
                        <div class="card-body" >
                            <p id="article_description"><?php echo $article[0]['news_description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <?php require "footer.php";?>

    </body>
</html>