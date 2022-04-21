<html>
    <head>
        <meta charset="UTF-8">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>ADMIN PANEL</title>
    </head>
    <body>
        <?php 
        require_once "config.php";
        require "header.php"; 
        ?>
        <div id="admin-panel">
            <h2>ADMIN</h2>
            <div id="admin-panel-menu">
                <div class="row">
                    <h3>ACCUEIL</h3>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalModifyHome">
                        Modifier accueil
                    </button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalModifyContact">
                        Modifier contact
                    </button>
                </div>

                <div class="row">
                    <h3>ACTUALITES</h3>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalnews">
                        Ajouter news
                    </button>
                    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDel">
                        Supprimer news
                    </button>
                    
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalModifyNews">
                        Modifier news
                    </button>
                </div>

                
                
                <!-- modal modify home page -->
                <div class="modal fade" id="modalModifyHome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <?php require_once "modifyHome.php"; ?>
                        </div>
                    </div>
                </div>

                <!-- modal modify contact page -->
                <div class="modal fade" id="modalModifyContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <?php require_once "modifyContact.php"; ?>
                        </div>
                    </div>
                </div>

                <!-- modal create profile card -->
                <div class="modal fade" id="modalnews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <?php require_once "addNews.php"; ?>
                        </div>
                    </div>
                </div>
                <!-- modal delete profile card -->
                <div class="modal fade" id="modalDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <?php require_once "deleteNews.php"; ?>
                        </div>
                    </div>
                </div>

                <!-- modal delete profile card -->
                <div class="modal fade" id="modalModifyNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <?php require_once "modifyNews.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php require "footer.php"; ?>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>