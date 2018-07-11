<?php
  require_once 'connect.php';
  include_once 'header.php';
?>

<div class="w3-content w3-padding" style="max-width:1564px">
  <div class="w3-container w3-padding-32" id="user">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">All users</h3>
  </div>
  <p><strong>Users of Marketplace</strong></p>
  <table class="w3-table-all">
    <tr>
     <th>Username</th>
   </tr>

    <?php
      $sql = "SELECT usrname FROM login";
      if(!$result = $conn->query($sql)) {
        echo "error";
        mysqli_close($conn);
        exit();
      }

      while($row = $result->fetch_assoc()) {
        $value = $row['usrname'];
        echo "<tr><td>$value</td></tr>";
      }
      mysqli_close($conn);
    ?>
  </table></br>
</div>
  </br>

<?php
include_once 'footer.php';
?>
