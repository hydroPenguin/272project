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
<!DOCTYPE html>
<html>
<head>
<title>272 Studio</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>272</b> Studio</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/index.php#home" class="w3-bar-item w3-button">Home</a>
      <a href="/index.php#about" class="w3-bar-item w3-button">About</a>
      <a href="/index.php#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="/index.php#news" class="w3-bar-item w3-button">News</a>
      <a href="/index.php#contacts" class="w3-bar-item w3-button">Contacts</a>
      <a href="/login.html" class="w3-bar-item w3-button">Login</a>
      <a href="/database.html" class="w3-bar-item w3-button">User</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/img/inner_page_bnr.jpg" alt="Banner" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>272</b></span> <span class="w3-hide-small w3-text-light-grey">Studio</span></h1>
  </div>
</header>

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

<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
