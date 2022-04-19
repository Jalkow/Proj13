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
        $sql = "SELECT * FROM user"; //sql request to get user infos
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $user = $pre->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="container-fluid" id="userinfo">
            <div class="row">
                <div class="col-8 offset-2" id="infoBox">
                    <h3>NAME</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['name']; ?></p>
                    <h3>LAST NAME</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['last_name']; ?></p>
                    <h3>EMAIL</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['email']; ?></p>
                    <h3>PASSWORD</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['password']; ?></p>
                    <h3>COUNTRY</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['country']; ?></p>
                    <h3>CITY</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['city']; ?></p>
                    <h3>POSTAL CODE</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['postal_code']; ?></p>
                    <h3>ADRESS</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['adress']; ?></p>
                    <h3>PHONE</h3>
                    <p id="displayUserInfo"><?php echo $_SESSION['user']['phone']; ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-4 connect-menu">
                <a class="menu-button2" href="signout.php">LOG OUT</a></li>
            </div>
        </div>
        
        

        <?php require "footer.php";?>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>