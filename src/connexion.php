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
    <div class="container">
      <div class="row">
        <div class="col-6 offset-3">
          <h2>Log in</h2>
          <form method="post" action="login.php" id="logIn">
          <input type='email' name='email' />
          <label>Email</label>
          <input type='password' name='password' />
          <label >Password</label>

          <div class="modal-footer">
            <a id="BTN" class="btn" onclick="document.getElementById('logIn').submit()"class="modal-close waves-effect waves-red btn-flat ">Log in</a>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php require "footer.php";?>
  </body>
</html>

