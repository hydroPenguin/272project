<?php
  require_once 'connect.php';
  include_once 'header.php';
?>
<div class="w3-content w3-padding" style="max-width:1564px">
  <div class="w3-container w3-padding-32">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Top 5 Products/Services for Each Company</h3>
  </div>

  <div class="w3-container w3-padding-32" id="272">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">272 Studio</h3>
  </div>
  <?php
    $sql = "SELECT * FROM products WHERE cid=1 ORDER BY score DESC LIMIT 5";
    if(!$result = $conn->query($sql)) {
      echo "error";
      mysqli_close($conn);
      exit();
    }

    while($row = $result->fetch_assoc()) {
      $pid = $row['pid'];
      $name = $row['name'];
      echo "<div class=\"w3-col l4 m4 s12 w3-margin-bottom\">";
      echo "<div class=\"w3-display-container\">";
      echo "<div class=\"w3-display-topleft w3-sand w3-padding\"><a href=\"view_product.php?id=$pid&name=$name\" class=\"w3-hover-text-lime\">$name</a></div>";
      echo "<img src=\"/marketplace/$pid.jpeg\" height=\"230\" width=\"400\">";
      echo "</div>";
      echo "</div>";
    }
  ?>

  <div class="w3-container w3-padding-32" id="iris">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Iris Wedding</h3>
  </div>
  <?php
    $sql = "SELECT * FROM products WHERE cid=2 ORDER BY score DESC LIMIT 5";
    if(!$result = $conn->query($sql)) {
      echo "error";
      mysqli_close($conn);
      exit();
    }

    while($row = $result->fetch_assoc()) {
      $pid = $row['pid'];
      $name = $row['name'];
      echo "<div class=\"w3-col l4 m4 s12 w3-margin-bottom\">";
      echo "<div class=\"w3-display-container\">";
      echo "<div class=\"w3-display-topleft w3-sand w3-padding\"><a href=\"view_product.php?id=$pid&name=$name\" class=\"w3-hover-text-lime\">$name</a></div>";
      echo "<img src=\"/marketplace/$pid.jpeg\" height=\"230\" width=\"400\">";
      echo "</div>";
      echo "</div>";
    }
  ?>


  <div class="w3-container w3-padding-32" id="kittey">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Kittey Bistro</h3>
  </div>
  <?php
    $sql = "SELECT * FROM products WHERE cid=3 ORDER BY score DESC LIMIT 5";
    if(!$result = $conn->query($sql)) {
      echo "error";
      mysqli_close($conn);
      exit();
    }

    while($row = $result->fetch_assoc()) {
      $pid = $row['pid'];
      $name = $row['name'];
      echo "<div class=\"w3-col l4 m4 s12 w3-margin-bottom\">";
      echo "<div class=\"w3-display-container\">";
      echo "<div class=\"w3-display-topleft w3-sand w3-padding\"><a href=\"view_product.php?id=$pid&name=$name\" class=\"w3-hover-text-lime\">$name</a></div>";
      echo "<img src=\"/marketplace/$pid.jpeg\" height=\"230\" width=\"400\">";
      echo "</div>";
      echo "</div>";
    }
  ?>


  <div class="w3-container w3-padding-32" id="shikai">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Shikai's Cafe</h3>
  </div>
  <?php
    $sql = "SELECT * FROM products WHERE cid=4 ORDER BY score DESC LIMIT 5";
    if(!$result = $conn->query($sql)) {
      echo "error";
      mysqli_close($conn);
      exit();
    }

    while($row = $result->fetch_assoc()) {
      $pid = $row['pid'];
      $name = $row['name'];
      echo "<div class=\"w3-col l4 m4 s12 w3-margin-bottom\">";
      echo "<div class=\"w3-display-container\">";
      echo "<div class=\"w3-display-topleft w3-sand w3-padding\"><a href=\"view_product.php?id=$pid&name=$name\" class=\"w3-hover-text-lime\">$name</a></div>";
      echo "<img src=\"/marketplace/$pid.jpeg\" height=\"230\" width=\"400\">";
      echo "</div>";
      echo "</div>";
    }
  ?>
</div>
<?php
  include_once 'footer.php';
  mysqli_close($conn);
?> 
