<?php
  include_once 'header.php';
?>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div class="w3-container w3-padding-32" id="user">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">User</h3>
    </div>

    <div class="w3-row-padding" id="forms">
      <div align="center" class="w3-col l6 6 s12 w3-margin-bottom">
        <form method = "post" action = "database.php">
            <p>Enter the following information to register.</p>
            <p>First name </br><input type="text" size="40" name = "firstName" /></br> </p>
            <p>Last name </br><input type="text" size="40" name = "lastName" /></br> </p>
            <p>Email </br><input type="email" size="40" name = "email" /></br> </p>
            <p>Home address(street and #) </br><input type="text" size="40" name = "address" /></br> </p>
            <p>Home phone </br><input type="phone" size="40" name = "hPhone" /></br> </p>
            <p>Cell phone </br><input type="phone" size="40" name = "cPhone" /></br> </p>
            <input type ="submit" name="Register" value = "Register" style = "width:183px;" />
        </form>
      </div>
      <div align="center" class="w3-col l6 6 s12 w3-margin-bottom">
        <form method = "post" action = "database.php">
            <p>Select a field to search:
              <select name="select">
                <option selected = "selected" value="*">All</option>
                <option value="firstName">First name</option>
                <option value="lastName">Last name</option>
                <option value="email">Email name</option>
                <option value="hPhone">Home phone</option>
                <option value="cPhone">Cell phone</option>
              </select>
            </p>
            <input type ="submit" name="Search" value = "Search" style = "width:183px;" />
        </form>
      </div>
      <div align="center" class="w3-col l6 6 s12 w3-margin-bottom">
        <a href="/userlist.php" class="w3-btn w3-black w3-hover-blue">Show user list</a>
      </div>
      <div align="center" class="w3-col l6 6 s12 w3-margin-bottom">
        <a href="/allusers.php" class="w3-btn w3-black w3-hover-blue">Show all users(merge with other sites)</a>
      </div>
  </div>
</div>
  </br>

<?php
  include_once 'footer.php';
?>
