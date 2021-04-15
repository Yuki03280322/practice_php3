<?php
function array123($num) {
  $count = 0;
  foreach ($num as $result) {
    if ($result == 1 || $result == 2 || $result == 3) {
      $count += 1;
    }
  }
  echo $count."個含みます\n";
}

array123([1,1,2,3,5]);
array123([1,3,5,9]);
array123([3,3,1,1,2,]);
?>

<!-- 配列の中に1,2,3が何個含まれているか -->