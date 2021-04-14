<?php
function police_trouble($a,$b) {
  if (($a == true && $b == true) || ($a == false && $b == false)) {
    echo "True\n";
  } else {
    echo "False\n";
  }
}

police_trouble(false, false);
police_trouble(true, false);
police_trouble(false, true);
police_trouble(true, true);

?>

<!-- 囚人のジレンマ -->