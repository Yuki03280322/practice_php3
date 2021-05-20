<?php
$line = trim(fgets(STDIN));
$array = explode(" ", $line);
$price = $array[0];
$sale = $array[1];

$pay = $price;
while($price > 0) {
  $sale_price = floor($price * $sale / 100);
  if($sale_price == 0) {
    break;
  }
  $price -= $sale_price;
  $pay += $price;
}

echo $pay. "\n";

?>