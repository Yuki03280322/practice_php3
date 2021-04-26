<?php
function near_ten($num) {
  $ten = round($num / 10) * 10;
  if ($ten - $num <= 2) {
    echo "True\n";
  } else {
    echo "False\n";
  }
}

near_ten(12);
near_ten(46);
near_ten(135);
?>

<!-- 正の整数が10の倍数との差が2以内であるか判断 -->