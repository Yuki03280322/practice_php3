<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

foreach($tmp as $value) {
  $array[] = explode(" ", $value);
}

$parent_a = $array[0][0];
$parent_b = $array[0][1];
$number = $array[1];
unset($array[0]);
unset($array[1]);

foreach($array as $key => $children) {
    if($children[0] < $parent_a) {
      echo "High\n";
    } elseif($children[0] == $parent_a) {
      if($children[1] > $parent_b) {
        echo "High\n";
      } else {
        echo "Low\n";
      }
    } else {
      echo "Low\n";
    }
}
?>

<!-- high&low -->