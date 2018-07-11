<?php
  include_once 'header.php';
  require_once 'connect.php';
?>


<table class="w3-table-all">
  <tr>
   <th>Last Visited 5 Pages</th>
 </tr>
<?php

  arsort($_COOKIE);
  $visit = array_slice($_COOKIE,0,5);

  foreach($visit as $key => $value) {
    $sql = "SELECT name FROM products WHERE pid='$key'";
    if(!$result=$conn->query($sql))
    {
      echo "error";
      mysqli_close($conn);
      exit();
    }
    while($row = $result->fetch_assoc()) {
      $name = $row['name'];
      $new_name = str_replace('', '%20', $name);
      print( "<tr><td><a href=\"view_product.php?id=$key&name=$new_name\" class=\"w3-hover-text-lime\">$name</a></td></tr>" );
    }
  }
  mysqli_close($conn);
?>
</table>

<?php include_once 'footer.php' ?>
