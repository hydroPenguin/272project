<!DOCTYPE html>
<html>
<?php
  extract($_POST);
  $database = mysqli_connect("fwulunch90311.ipagemysql.com", "D4Le12FlajIToot", "databasepsword");
  if (!$database) {
     die("Could not connect to database");
  }
?>
<head>
<title>272 Studio</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item w3-button"><b>272</b> Studio</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="/index.php#home" class="w3-bar-item w3-button">Home</a>
        <a href="/index.php#about" class="w3-bar-item w3-button">About</a>
        <a href="/index.php#projects" class="w3-bar-item w3-button">Projects</a>
        <a href="/index.php#news" class="w3-bar-item w3-button">News</a>
        <a href="/index.php#contacts" class="w3-bar-item w3-button">Contacts</a>
        <a href="/login.html" class="w3-bar-item w3-button">Login</a>
        <a href="/database.html" class="w3-bar-item w3-button">User</a>
      </div>
    </div>
  </div>
  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="/img/inner_page_bnr.jpg" alt="Banner" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>272</b></span> <span class="w3-hide-small w3-text-light-grey">Studio</span></h1>
    </div>
  </header>

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

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>

</body>
</html>
