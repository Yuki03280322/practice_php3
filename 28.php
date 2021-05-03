<?php
function near_ten($num) {
  $hyaku = ($num / 100) % 10;
  $zyu = ($num / 10) % 10;
  $iti = $num % 10;
  $result = $hyaku + $zyu + $iti;
  $result_iti = $result % 10;
  if($result_iti <= 2 || $result_iti >= 8) {
    echo "True\n";
  } elseif($result_iti <= 5) {
    echo "10の倍数との差は". $result_iti. "です\n";
  } else {
    echo "10の倍数との差は". (10 - $result_iti). "です\n";
  }

}
near_ten(117);
near_ten(111);
near_ten(123);
?>