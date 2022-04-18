<html>
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
    <?php require "header.php";?>
    <form method="post" action="signup.php" id="signUp">
        <?php if(isset($_SESSION['errorMail'])){
            ?><p>Error, mail and confirm mail are not matching</p><?php
        }
        ?>
        <h3>email</h3>
        <input type='email' name='email' />
        <h3>confirm email</h3>
        <input type='email' name='confirmEmail' />
        <h3>password</h3>
        <input type='password' name='password' required minlength="4" />
        <h3>name</h3>
        <input type='text' name='userName' />
        <h3>last name</h3>
        <input type='text' name='userLastName' />
        <h3>country</h3>
        <input type='text' name='country' />
        <h3>city</h3>
        <input type='text' name='city' />
        <h3>postal code</h3>
        <input type='number' name='postalCode' />
        <h3>adress</h3>
        <input type='text' name='adress' />  
        <h3>phone</h3>
        <input type='tel' name='phone' />


        <div class="modal-footer">
            <a id="BTN" class="btn" onclick="document.getElementById('signUp').submit()"class="modal-close waves-effect waves-red btn-flat ">sign up</a>
        </div>
    </form>
    <?php require "footer.php";?>
  </body>
</html>