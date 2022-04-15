<h2>Log in</h2>
<form method="post" action="login.php" id="log in">
  <input type='email' name='email' />
  <label>Email</label>
  <input type='password' name='password' />
  <label >Password</label>
  <div>
    <p>You are not register yet ?</p><a class="btn" data-bs-toggle="modal" data-bs-target="#modalInscription">sign up !</a> 
  </div>
  <div>
    <a class="btn" href="signout.php">Log out</a></li>
  </div>
  <div class="modal-footer">
    <a class="btn btn-success" onclick="document.getElementById('log in').submit()" class="modal-close waves-effect waves-red btn-flat ">connect</a>
  </div>
</form>