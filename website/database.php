<?php
  include_once 'header.php';
?>


  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div class="w3-container w3-padding-32" id="user">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Search result</h3>
    </div>
    <?php if(isset($Search)) : ?>
      <p><strong>Your search yielded: </strong></p></br>
      <table class="w3-table-all">
      <?php
        $query = "SELECT " . $select . " FROM users";
        if(!mysqli_select_db($database, "ss_dbname_ckfkhjd6an")) {
          die("Could not open database");
        }

        if(!($result=mysqli_query($database, $query))) {
          print("Could not execute query!</br>");
          die(mysqli_error($database));
        }
        for($counter=0; $row=mysqli_fetch_row($result); $counter++) {
          print("<tr>");
          foreach($row as $key => $value) {
            print("<td>$value</td>");
          }
          print("</tr>");
        }
        mysqli_close($database);
      ?>
      </table>
    <?php endif; ?>

    <?php if(isset($Register)) : ?>
      <?php
        $query1 = "INSERT INTO users (firstName, lastName, email, address, hPhone, cPhone) VALUES";
        $query2 = "(\"{$firstName}\",\"{$lastName}\",\"{$email}\",\"{$address}\",\"{$hPhone}\",\"{$cPhone}\")";
        $query = $query1 . $query2;

        if(!mysqli_select_db($database, "ss_dbname_ckfkhjd6an")) {
          die("Could not open database");
        }

        if(!($result=mysqli_query($database, $query))) {
          print("Could not execute query!</br>");
          die(mysqli_error($database));
        }
        mysqli_close($database);
      ?>
      <p><strong>Your have been added into our user database!</strong></p></br>
    <? endif; ?>
    </br>

  </div>

<?php
  include_once 'footer.php';
?>
