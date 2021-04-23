<?php
function calculate_points($amount, $is_birthday) {
  if ($is_birthday && $amount <= 999) {
    $point = floor($amount * 0.03 * 5);
    echo "ポイントは". $point. "点です\n";
  } elseif ($is_birthday && $amount >= 1000) {
    $point = floor($amount * 0.05 * 5);
    echo "ポイントは". $point. "点です\n";
  } elseif ($is_birthday == false && $amount <= 999) {
    $point = floor($amount * 0.03);
    echo "ポイントは". $point. "点です\n";
  } else {
    $point = floor($amount * 0.05);
    echo "ポイントは". $point. "点です\n";
  }
}

calculate_points(98, true);
calculate_points(1500, true);
calculate_points(500, false);
calculate_points(1500, false);
?>

<!-- ポイントを計算する -->