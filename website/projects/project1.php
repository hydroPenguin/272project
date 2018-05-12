<?php
  $name = "project1";
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
  <div class="w3-container w3-padding-32" id="p1">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">UI/UX design</h3>
  </div>

  <div class="w3-container w3-padding-32">
    <img class="w3-image" src="/img/project1.jpg" style="width:100%">
  </div>

  <div class="w3-container w3-padding-32">
    <p>We'll take your customers on an amazing journey from the very first second of using your product.
      Our custom designs offer an alluring and straightforward path to learning more about your company and opting for your services.</br>
      An efficient user interface covers the gap between the human brain and the digital product you offer.
      Based on the behavioral patterns and in compliance with the Human Interface Guidelines we create delightful user experience – simple
      , intuitive and efficient.</br> Powerful UI and UX is the key to more sales, higher user adoption rates and easier onboarding.
      By taking the following elements into account, we conduct the initial research and craft the design to deliver
       immediate ROI for your business. Together, we'll mold your ideal into a physical design aimed to impress and deliver.</br></p>
  </div>


  <div class="w3-row-padding">
    <p>Last viewed 5 pages: </br><?php foreach($_COOKIE as $key => $value) print("$key => $value\n"); ?></p>
  </div>
</div>

<?php
  include_once ($_SERVER['DOCUMENT_ROOT'] . "/footer.php");
?>
