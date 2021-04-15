<?php
function array123($num) {
  $count1 = 0;
  $count2 = 0;
  $count3 = 0;
  foreach ($num as $result) {
    if ($result == 1) {
      $count1 += 1;
    } elseif ($result == 2) {
      $count2 += 1;
    } elseif ($result == 3) {
      $count3 += 1;
    }
  }
  if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
    echo "全て一致しました\n";
  } else {
    echo "一致しませんでした\n";
  }
}

array123([1,1,2,3,5]);
array123([1,3,5,9]);
array123([3,3,1,1,2,]);
?>

<!-- 指定した配列に1,2,3の数値が全て含まれているか -->