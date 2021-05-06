<?php
function close_far($num1, $num2, $num3) {
  $num1_2 = abs($num1 - $num2);
  $num1_3 = abs($num1 - $num3);
  $num2_3 = abs($num2 - $num3);
  if(($num1_2 == 1 || $num1_3 == 1) && ($num2_3 >= 2)) {
    echo "True\n";
  } else {
    echo "False\n";
  }
}

close_far(1, 2, 10);
close_far(1, 2, 3);
close_far(4, 1, 3);
?>