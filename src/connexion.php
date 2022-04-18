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
  <?php require "header.php";
   if($_SESSION["error"]==1){?>
    <p>Utilisateur ou mot de passe incorrect !</p>
  <?php}?>
    <div class="container">
      <div class="row">
        <div class="col-6 offset-3">
          <h2>Log in</h2>
          <form method="post" action="login.php" id="logIn">
            <label>Email</label>
            <input type='email' name='email' />
            <label >Password</label>
            <input type='password' name='password' />
            
            <hr>
            <p>You are not register yet ?</p>
            <a class="btn" href="inscription" id="signUpbtn">sign up !</a> 
            <div class="modal-footer">
              <a id="BTN" onclick="document.getElementById('logIn').submit()" class="modal-close waves-effect waves-red btn">connect</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php require "footer.php";?>
  </body>
</html>

