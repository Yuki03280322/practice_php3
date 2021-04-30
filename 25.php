<?php
$input_line = trim(fgets(STDIN));
$str_length = mb_strlen($input_line);
$front_line = $str_length + 2;
for($a = 0; $a <= $front_line; $a++) {
  if($a < $front_line) {
    echo "+";
  } elseif($a == $front_line) {
    echo "\n";
  }
}
echo "+". $input_line. "+\n";
for($b = 0; $b <= $front_line; $b++) {
  if($b < $front_line) {
    echo "+";
  } elseif($b == $front_line) {
    echo "\n";
  }
}
?>

<!-- 入力された文字を装飾 -->