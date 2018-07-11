<?php
  $store = $_GET['id'];
  setcookie( $store, time(), time()+3600);
?>

<?php
  include_once ('header.php');
  // require_once 'connect.php';
?>

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
<?php if(!empty($_SERVER['QUERY_STRING'])): ?>
    <div class="w3-content w3-padding" style="max-width:1564px">
      <div class="w3-container w3-padding-32">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><?php echo $_GET['name']?></h3>
      </div>
      <!-- <div class="w3-container w3-padding-32 fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> -->
      <div class="w3-container w3-padding-32" align="center">
            <?php
              echo '<img src="marketplace/' . $_GET['id'] . '.jpeg" height="500" width="900">'
            ?>
      </div>
      </br></br>
      <?php include('star.php'); ?>

      <div class="w3-container w3-padding-32">
        <!-- show rating -->
        <?php include('include/showrating.php'); ?>
      </div>

      <div class="w3-container w3-padding-32">
        <!-- show reviews -->
        <?php include ('include/showreview.php') ?>

      </div>
    </div>

<?php endif; ?>
