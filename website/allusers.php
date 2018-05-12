<?php
  include_once 'header.php';
?>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <div class="w3-container w3-padding-32" id="user">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">All users</h3>
    </div>
    <p><strong>Users of my website</strong></p>
    <table class="w3-table-all">
      <?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, 'http://fwulunch.com/userlist.php');
        $result = curl_exec($ch);
        $arr = explode("</br>", $result);
        foreach($arr as $key => $value) {
            print("<tr><td>$value</td></tr>");
          }
      ?>
    </table></br>
    <p><strong>Users of Jin's website</strong></p>
    <table class="w3-table-all">
      <?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, 'http://shikaijin.com/user_list_page.php');
        $result = curl_exec($ch);
        $result = str_replace("<p>","",$result);
        $arr = explode("</p>", $result);
        foreach($arr as $key => $value) {
            print("<tr><td>$value</td></tr>");
          }
      ?>
    </table></br>
  </div>
    </br>

<?php
  include_once 'footer.php';
?>
