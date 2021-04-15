<?php
function sleep_in($weekday,$vacation) {
  if ($weekday == false || $vacation == true) {
    echo "休日です\n";
  } else {
    echo "仕事です\n";
  }
}

sleep_in(false, false);
sleep_in(true, false);
sleep_in(false, true);

?>

<!-- 仕事or休日 -->