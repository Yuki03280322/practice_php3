<?php
function lone_sum($a, $b, $c) {
  $result = $a + $b + $c;
  if ($a != $b && $a != $c && $b != $c) {
    echo $result. "\n";
  } elseif ($a == $b && $a != $c) {
    echo $c. "\n";
  } elseif ($a != $b && $a == $c) {
    echo $b. "\n";
  } elseif ($a != $b && $b == $c) {
    echo $a. "\n";
  } elseif ($a == $b && $a == $c) {
    echo "全て同じ数字です\n";
  }
}

lone_sum(4,5,6);
lone_sum(5,5,3);
lone_sum(2,3,2);
lone_sum(3,4,4);
lone_sum(3,3,3);
?>