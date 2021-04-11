<?php
function in1to10($num,$outside_num) {
  if ($outside_num){
    echo "True\n";
} elseif ($outside_num == "false" && 0 < $num || $num < 11){
    echo "True\n";
  }else {
    echo "False\n";
  }
}

in1to10(19,false);
in1to10(5,false);
in1to10(11,true);
in1to10(5,true);
?>