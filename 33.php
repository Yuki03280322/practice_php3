<?php
$single_line_input = fgets(STDIN);
$array = explode(" ", $single_line_input);
$buy_flesh = $array[0] * ($array[1] / 100);
$souzai = $array[0] - $buy_flesh;
$buy_souzai = $souzai * ($array[2] / 100);
echo $souzai - $buy_souzai."\n";
?>

<!-- 入力された値から売れ残りを計算する -->