<html lang="en">
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
            require_once "header.php";
            
        ?>

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-image">
            add img
        </button>
        <div class="modal fade" id="modalDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php require_once "add_image.php"; ?>
                </div>
            </div>
        </div>

        <?php require "footer.php";?>
    </body>
</html>