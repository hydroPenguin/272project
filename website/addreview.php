<?php
  session_start();
  require_once 'connect.php';
?>
<?php
  extract( $_POST );
  $uid = $_SESSION['id'];
  $pid = $id;
  $comment = $comment;
  $rating = $rating;
  $sql = "INSERT INTO reviews (id, comment, rate, username) VALUES " . "('$pid', '$comment', '$rating', '$uid')";
  if ($conn->query($sql)) {
    header("Location: ../view_product.php?id=$id&name=$pname");
    mysqli_close($conn);
    exit();
  } else {
    echo "Insertion error";
    mysqli_close($conn);
    exit();
  }
?>
