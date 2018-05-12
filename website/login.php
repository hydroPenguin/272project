<?php
  include_once 'header.php';
?>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div class="w3-container w3-padding-32" id="login">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Login</h3>
    </div>

    <div class="w3-row-padding">
      <form method = "post" action = "password.php">
          <p>Username </br><input size="40" name = "USERNAME" /></br></p>
          <p>Password </br><input type="password" size="40" name = "PASSWORD" /></br> </p>
          <input type ="submit" name="Register" value = "Register" style = "width:183px;" />
          <input type ="submit" name="Login"  value = "Login" style = "width:183px;" />
      </form>
    </div>
  </div>
  </br>

<?php
  include_once 'footer.php';
?>
