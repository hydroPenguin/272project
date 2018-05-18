<?php
  session_start();
  require_once 'connect.php';
?>
<?php
  extract( $_POST );
  if(isset($Register)) {
    $sql = "SELECT usrname FROM login";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if ($row['usrname'] == $USERNAME) {
          header("Location: ../marketplace.php?login=existed");
          mysqli_close($conn);
          exit();
        }
      }
    }

    #create user
    $hashed = password_hash("$PASSWORD", PASSWORD_DEFAULT);
    $query1 = "INSERT INTO login (usrname, psword) VALUES " . "('$USERNAME', '$hashed')";
    if ($conn->query($query1)) {
      $_SESSION['id'] = $USERNAME;
      header("Location: ../marketplace.php?login=success");
      mysqli_close($conn);
      exit();
    } else {
      echo "Creation error";
    }
  }

  else {
    $sql = "SELECT usrname,psword FROM login";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if ($row['usrname'] == $USERNAME) {
          if (password_verify($PASSWORD, $row['psword'])) {
            $_SESSION['id'] = $USERNAME;
            header("Location: ../marketplace.php?login=success");
            mysqli_close($conn);
            exit();
          } else {
            header("Location: ../marketplace.php?login=incorrect");
            mysqli_close($conn);
            exit();
          }
        }
      }
        header("Location: ../marketplace.php?login=notexisted");
        mysqli_close($conn);
        exit();
    }
  }

?>
