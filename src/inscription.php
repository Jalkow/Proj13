<form method="post" action="signup.php" id="sign up">
    <h3>email</h3>
    <input type='email' name='email' />
    <h3>confirm email</h3>
    <input type='email' name='confirmEmail' />
    <h3>password (min 4 character or number)</h3>
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
    <input type='number' name='phone' required minlength="10" maxlength="10"/>

    <div class="modal-footer">
        <a class="btn btn-success" onclick="document.getElementById('sign up').submit()"class="modal-close waves-effect waves-red btn-flat ">sign up</a>
  </div>
</form>