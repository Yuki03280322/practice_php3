<?php
$line = trim(fgets(STDIN));
$array = explode(" ", $line);
$price = $array[0];
$sale = $array[1];

$pay = $price;
while($price > 0) {
  $sale_price = floor($price * $sale / 100);
  $price -= $sale_price;
  $pay += $price;
  if($price < 0) {
    break;
  }
}

echo $pay. "\n";

?>