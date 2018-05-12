<?php
  $name = "project7";
  $count = count($_COOKIE);

  if($count < 5) {
    $count = intval($count+1);
    setcookie($count,$name);
  }
  else {
    $arr = $_COOKIE;
    setcookie("1",$arr["2"]);
    setcookie("2",$arr["3"]);
    setcookie("3",$arr["4"]);
    setcookie("4",$arr["5"]);
    setcookie("5",$arr[$name]);
  }

?>
<?php
  include_once ($_SERVER['DOCUMENT_ROOT'] . "/header.php");
?>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="p7">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Mobile app</h3>
  </div>

  <div class="w3-container w3-padding-32">
    <img class="w3-image" src="/img/project7.png" style="width:100%">
  </div>

  <div class="w3-container w3-padding-32">
    <p>We have extensive experience in creating high performing, digitally transformative and feature-packed
      native mobile applications for all the major mobile platforms including iOS, Android, BlackBerry OS and Windows Mobile.</br></p>
  </div>

  <div class="w3-row-padding">
    <p>Last viewed 5 pages: </br><?php foreach($_COOKIE as $key => $value) print("$key => $value\n"); ?></p>
  </div>
</div>

<?php
  include_once ($_SERVER['DOCUMENT_ROOT'] . "/footer.php");
?>
