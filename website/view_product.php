<?php
  include_once 'header.php';
  // require_once 'connect.php';
?>
<?php if(!empty($_SERVER['QUERY_STRING'])): ?>
    <div class="w3-content w3-padding" style="max-width:1564px">
      <div class="w3-container w3-padding-32">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><?php echo $_GET['name']?></h3>
      </div>
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
