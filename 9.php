<?php
function count_evens($array) {
  $result = 0;
  foreach($array as $num) {
    if($num % 2 === 0) {
      $result += 1;
    }
  }
  echo $result."\n";
}

count_evens([2,1,2,3,4]);
count_evens([2,2,0]);
count_evens([1,3,5]);
count_evens([3,5,7,10]);

?>