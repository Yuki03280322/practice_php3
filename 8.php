<?php
function parrot_call($call,$hour) {
  if (($call) && ($hour > 0 && $hour < 7)) {
    echo "NG\n";
  } elseif (($call) && ($hour > 20 && $hour < 23)) {
    echo "NG\n";
  } else {
    echo "OK\n";
  }
}

parrot_call(true,6);
parrot_call(true,7);
parrot_call(false,6);
parrot_call(false,7);
parrot_call(true,22);
parrot_call(true,23);

?>