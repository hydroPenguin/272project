<?php
  session_start();
?>

<!DOCTYPE html>
<?php
$contacts = file('contacts.txt', true);
?>
<html>
<head>
<title>272 Studio</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>272</b> Studio</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right">
      <a href="/index.php#home" class="w3-bar-item w3-button">Home</a>
      <a href="/index.php#about" class="w3-bar-item w3-button">About</a>
      <a href="/index.php#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="/index.php#news" class="w3-bar-item w3-button">News</a>
      <a href="/index.php#contacts" class="w3-bar-item w3-button">Contacts</a>
      <a href="/login.php" class="w3-bar-item w3-button">Login</a>
      <a href="/database_page.php" class="w3-bar-item w3-button">User</a>
      
      <a href="/marketplace.php" class="w3-bar-item w3-button">Marketplace</a>

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
