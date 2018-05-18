<?php require_once 'connect.php'; ?>
<style>
/* .icon-a {
    color: #888;
}
.icon-b {
    color: orange;
}
.icon-c {
    color: yellow;
} */
.icon-d {
    color: yellow;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: orange;
}
</style>
<?php
  $pid = $_GET['id'];
  $pname = $_GET['name'];
  $sql = "SELECT comment,rate,username FROM reviews WHERE id=$pid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $count = intval($result->num_rows);
    $score = 0;
    while($row = $result->fetch_assoc()) {
        $score += floatval($row[rate]);
      }
    // echo $score;
    // echo $count;
    $r = $score/$count;
    $sql = "INSERT INTO products (pid, score, name) VALUES " . "('$pid', $r, '$pname') ON DUPLICATE KEY UPDATE score = $r";
    if(!$result = $conn->query($sql)) {
      echo "update error";
    }
    echo "<p>Average user rating: ";
    $asdf = renderStarRating($r);
    echo "$asdf";
    echo "</p></br>";

  } else {
    echo "<p>There is no reviews yet</p></br>";
  }

  function renderStarRating($rating,$maxRating=5) {
    $fullStar = "<i class = 'icon-star icon-large icon-d'></i>";
    $halfStar = "<i class = 'icon-star-half-full icon-large icon-d'></i>";
    $emptyStar = "<i class = 'icon-star-empty icon-large icon-d'></i>";
    $rating = $rating <= $maxRating?$rating:$maxRating;

    $fullStarCount = (int)$rating;
    $halfStarCount = ceil($rating)-$fullStarCount;
    $emptyStarCount = $maxRating -$fullStarCount-$halfStarCount;

    $html = str_repeat($fullStar,$fullStarCount);
    $html .= str_repeat($halfStar,$halfStarCount);
    $html .= str_repeat($emptyStar,$emptyStarCount);
    return $html;
}
?>
