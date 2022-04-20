<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Roboto&display=swap" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coopni Studio</title>
    </head>
    <body>
    <?php
        require_once "config.php";
        require "header.php";

        $sql = "SELECT * FROM contact"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $conta = $pre->fetchAll(PDO::FETCH_ASSOC);
        ?>


        <div class="container-fluid">
           <h1>NOTRE STUDIO</h1>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-11">
                    <div class="contact-about-container">
                        <img class="col-6" src="<?php echo $conta[0]['img1']; ?>" alt="">
                        <div class="col-6 about-text-container-right">
                            <p>
                                <?php echo $conta[0]['text1']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-11">
                    <div class="contact-about-container">
                        <div class="col-6 about-text-container-left">
                            <p>
                                <?php echo $conta[0]['text2']; ?>
                            </p>
                        </div>
                        <img class="col-6" src="<?php echo $conta[0]['img2']; ?>" alt="">
                    </div>
                </div>
            </div>

            <h2>FONDATEURS</h2>

            <div class="row justify-content-center founders-infos-container">
                <div class="founder-col col-3">
                    <img src="img/gaelle.JPG" alt="">
                    <h3>Gaëlle Lebouhellec</h3>
                    <p>Lorem ipsumo el signore poel primero espagnolog</p>
                </div>
                <div class="founder-col col-3">
                    <img src="img/aurore.jpg" alt="">
                    <h3>Gaëlle Lebouhellec</h3>
                    <p>Lorem ipsumo el signore poel primero espagnolo gespagnologespagnologespagn ol o g es p a gnologespagnologespagnolog</p>
                </div>
                <div class="founder-col col-3">
                    <img src="img/jean.jpg" alt="">
                    <h3>Gaëlle Lebouhellec</h3>
                    <p>Lorem ipsumo el signore poel primero espagnolog</p>
                </div>
            </div>

            <div id="contact-infos" class="contact-infos-container">
                <p>NOTRE ADRESSE</p>
                <p>OÙ EST-CE QUE VOUS POUVEZ NOUS TROUVER</p>

                <div class="row justify-content-center">
                    <div class="infos-col col-3">
                        <img src="img/phone-call.png" alt="">
                        <p>NOUS APPELER</p>
                        <a href="tel:+33677890001"><?php echo $conta[0]['phone']; ?></a>
                    </div>
                    <div class="infos-col col-3">
                        <img src="img/email.png" alt="">
                        <p>ADRESSE EMAIL</p>
                        <a href="mailto:<?php echo $conta[0]['email']; ?>?subject=coopni studio page contact"><?php echo $conta[0]['email']; ?></a>
                    </div>
                    <div class="infos-col col-3">
                        <img src="img/linkedin.png" alt="">
                        <p>LINKEDIN</p>
                        <a href="<?php echo $conta[0]['linkedin']; ?>">coopnistudio</a>
                    </div>
                </div>

                <p>Un problème ? Contactez-nous à cette adresse : <a href="mailto:<?php echo $conta[0]['emailSAV']; ?>?subject=coopni help needed"><?php echo $conta[0]['emailSAV']; ?></a></p>
            </div>
        </div>
        

        <?php require "footer.php"; ?>
    </body>
</html>