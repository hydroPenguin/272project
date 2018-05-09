<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
  <?php
    extract( $_POST );
    if(!$USERNAME || !$PASSWORD) {
      fieldsBlank();
      die();
    }

    if(isset($Register)) {
      if (!($file = fopen("password.txt", "r"))) {
        print("<title>Error</title></head><body>Could not open password file</body></html>");
        die();
      }
      $exist = false;
      while(!feof($file) && !$exist) {
        $line=fgets($file,255);
        $line=chop($line);
        $field=explode(",", $line, 2);
        if($USERNAME==$field[0]) {
          $exist=1;
        }
      }
      fclose($file);
      if(!$exist) {
        if (!($file = fopen("password.txt", "a"))) {
          print("<title>Error</title></head><body>Could not open password file</body></html>");
          die();
        }
        fputs($file, "$USERNAME,$PASSWORD\n");
        fclose($file);
        userAdded($USERNAME);
      }
      else {
        print("<title>User existed</title></head><body>You are already registered, please login.</body></html>");
      }

    }
    else {
      if (!($file = fopen("password.txt", "r"))) {
        print("<title>Error</title></head><body>Could not open password file</body></html>");
        die();
      }
      $userVerified=0;
      while(!feof($file) && !$userVerified) {
        $line=fgets($file,255);
        $line=chop($line);
        $field=explode(",", $line, 2);

        if($USERNAME==$field[0]) {
          $userVerified=1;
          if(checkPassword($PASSWORD,$field)==true) {
            accessGranted($USERNAME);
          }else{
            wrongPassword();
          }
        }
      }
      fclose($file);

      if(!$userVerified) {
        accessDenied();
      }
    }

    function checkPassword($p,$f)
    {
      if($p==$f[1]) return true;
      else return false;
    }

    function userAdded($name)
    {
      print("<title>Hello, $name</title></head><body><p>Dear $name, you have successfully registered!</p>");
    }

    function accessGranted($name) {
      print("<title>Hello, $name</title></head><body><p>Dear $name, Welcome back!</p>");
    }

    function wrongPassword() {
      print("<title>Access Denied</title></head><body><p>You entered an invalid password.</br>Access has been denied.</p>");
    }

    function accessDenied() {
      print("<title>Access Denied</title></head><body><p>You are not registered.</p>");
    }

    function fieldsBlank() {
      print("<title>Access Denied</title></head><body><p>Please fill in all fields.</p>");
    }

  ?>
</body>
</html>
