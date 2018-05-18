<?php require_once 'connect.php'; ?>
<?php
  $pid = $_GET['id'];
  $sql = "SELECT comment,rate,username FROM reviews WHERE id=$pid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class=\"w3-card-4 w3-container w3-padding\">";
      echo "<p>User: " . $row['username'] . "</p>";
      echo "<p>Rating: " . $row['rate'] . "</p>";
      echo "<p>Comment: " . $row['comment'] . "</p>";
      echo "</div>";
      echo "</br>";
    }
  }
  mysqli_close($conn);

?>
