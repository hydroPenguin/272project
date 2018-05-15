<?php

  $host = "fwulunch90311.ipagemysql.com";
  $username = "fwulunch";
  $password = "dbpassword123";
  $db = "mydb";
  $conn = new mysqli($host, $username, $password, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // $sql = "USE mydb;";
  //
  // if($conn->query($sql)) {
  //   // echo "success";
  // } else {
  //   echo "failed";
  // }

?>
