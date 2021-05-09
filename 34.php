<?php
while($line = fgets(STDIN)) {
  $tmp[] = trim($line);
}
unset($tmp[0]);
$result = 0;
$floor = 1;
foreach($tmp as $a) {
  $result += abs($floor - $a);
  $floor = $a;
}

echo $result. "\n";
?>

<!-- エレベーターで動いた階を計算し出力 -->