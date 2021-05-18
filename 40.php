<?php
$line = trim(fgets(STDIN));
$line = str_replace('-', '', $line);
$telephone = str_split($line);

$roll = array(
  '0' => '24',
  '1' => '6',
  '2' => '8',
  '3' => '10',
  '4' => '12',
  '5' => '14',
  '6' => '16',
  '7' => '18',
  '8' => '20',
  '9' => '22'
);

$count = 0;
foreach($telephone as $key => $telephone_num) {
  foreach($roll as $black_dial => $dial_roll) {
    if($telephone_num == $black_dial) {
      $count += $dial_roll;
    }
  }
}

echo $count;
?>

<!--
黒電話でのダイヤル移動距離算出

9315-35-7398

146
 -->