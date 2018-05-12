<?php
  $name = "project8";
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
  <div class="w3-container w3-padding-32" id="p8">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Game design</h3>
  </div>

  <div class="w3-container w3-padding-32">
    <img class="w3-image" src="/img/project8.jpeg" style="width:100%">
  </div>

  <div class="w3-container w3-padding-32">
    <p>We provide game development services to organization’s with social, philanthropic, and educational missions. We empower
       entrepreneurs, socially-conscious businesses, non-profit-organizations, and others to change the world by enabling them
       to leverage video games as a medium for engagement and education. Our focus is on creating gaming experiences that would be
        worthwhile playing even without their deeper message. We don’t simply append badges and scores to a series of everyday tasks.
        Instead, we create complete and enjoyable games that truly immerse their audiences.</br></p>
  </div>

  <div class="w3-row-padding">
    <p>Last viewed 5 pages: </br><?php foreach($_COOKIE as $key => $value) print("$key => $value\n"); ?></p>
  </div>
</div>

<?php
  include_once ($_SERVER['DOCUMENT_ROOT'] . "/footer.php");
?>
