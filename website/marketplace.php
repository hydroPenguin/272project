<?php
  // session_start();
  include_once 'header.php';
?>
<?php if(empty($_SERVER['QUERY_STRING']) || $_GET['login'] == 'existed' || $_GET['login'] == 'incorrect' || $_GET['login'] == 'notexisted'): ?>
    <div class="w3-content w3-padding" style="max-width:1564px">
      <div class="w3-container w3-padding-32" id="m_login">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Marketplace Login</h3>
      </div>
      <?php if($_GET['login'] == 'existed'): ?>
        <div class="w3-content w3-padding" style="max-width:1564px">
          <p> Username existed, please try again! </p>
        </div>
      <?php endif; ?>
      <?php if($_GET['login'] == 'incorrect'): ?>
        <div class="w3-content w3-padding" style="max-width:1564px">
          <p> Password incorrect, please try again! </p>
        </div>
      <?php endif; ?>
      <?php if($_GET['login'] == 'notexisted'): ?>
        <div class="w3-content w3-padding" style="max-width:1564px">
          <p> Username not existed, please try again! </p>
        </div>
      <?php endif; ?>
      <div class="w3-cell-middle" style="text-align:center;">
        <form method = "post" action = "m_login.php">
            <p>Username </br><input size="40" name = "USERNAME" placeholder="username" required/></br></p>
            <p>Password </br><input type="password" size="40" name = "PASSWORD" placeholder="password" required/></br> </p>
            <input type ="submit" name="Register" value = "Register" style = "width:183px;" />
            <input type ="submit" name="Login"  value = "Login" style = "width:183px;" />
        </form>
      </div>
    </div>
    </br></br>
<?php endif; ?>
<?php if($_GET['login'] == 'success'): ?>
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div align="right">
      <button class="w3-button w3-round-xlarge w3-sand">
            <a href='logout.php'>Log out</a>
      </button>
    </div>

    <div class="w3-container w3-padding-32" id="272">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">272 Studio</h3>
    </div>
    <?php
      include_once ('include/272.php');
    ?>
    
    <div class="w3-container w3-padding-32" id="kittey">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Iris Wedding</h3>
    </div>
    <?php
      include_once ('include/iris.php');
    ?>

    <div class="w3-container w3-padding-32" id="kittey">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Kittey's Bistro</h3>
    </div>
    <?php
      include_once ('include/kittey.php');
    ?>

    <div class="w3-container w3-padding-32" id="kittey">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Shikai's Cafe</h3>
    </div>
    <?php
      include_once ('include/shikai.php');
    ?>

  </div>


<?php endif; ?>

<?php
  include_once 'footer.php';
?>
