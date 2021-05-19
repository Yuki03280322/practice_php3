<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

foreach($tmp as $value) {
  $array[] = explode(" ", $value);
}

$pass_line = $array[0][1];
unset($array[0]);

foreach($array as $student_num => $value) {
  $absence = $value[1];
  $deduction = $absence * 5;
  $grades = $value[0] - $deduction;
  if($grades >= $pass_line) {
    echo $student_num. "\n";
  } elseif($pass_line <= 0) {
    echo $student_num. "\n";
  }
}

?>

<!--
テストの採点

5 25
80 11
20 1
50 2
70 0
25 1

1
3
4

-->