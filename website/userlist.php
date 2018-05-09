<?php
  $database = mysqli_connect("fwulunch90311.ipagemysql.com", "fwulunch", "dbpassword123");
  if (!$database) {
     die("Could not connect to database");
  }

  $query1 = "SELECT firstname FROM users";
  $query2 = "SELECT lastname FROM users";

  if(!mysqli_select_db($database, "mydb")) {
    die("Could not open database");
  }

  if(!($result1=mysqli_query($database, $query1))) {
    print("Could not execute query!</br>");
    die(mysqli_error($database));
  }

  if(!($result2=mysqli_query($database, $query2))) {
    print("Could not execute query!</br>");
    die(mysqli_error($database));
  }

  for($counter=0; $row=mysqli_fetch_row($result1); $counter++) {
    foreach($row as $key => $value) {
      $list[$counter] = $value;
    }
  }

  for($counter=0; $row=mysqli_fetch_row($result2); $counter++) {
    foreach($row as $key => $value) {
      $list[$counter] = $list[$counter] . " " . $value;
    }
  }

  foreach($list as $element) {
    print("$element</br>");
  }


  mysqli_close($database);
?>
