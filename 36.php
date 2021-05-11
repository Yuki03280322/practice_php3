<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}

foreach($tmp as $value) {
  $array[] = explode(" ", $value);
}

$lucky_numbers = $array[0];
$buy_kuzi = $array[1];
unset($array[0]);
unset($array[1]);

foreach($array as $key => $kuzi) {
  $match = 0;
  foreach($kuzi as $key => $kuzi_6num) {
    foreach($lucky_numbers as $key => $result) {
      if($result == $kuzi_6num) {
        $match += 1;
      }
    }
  }
  echo $match. "\n";
}

?>

<!-- 宝くじの当選チェック -->