<?php
$food_price = array(
  "apple" => [100,200,300],
  "potato" => [150,250,350],
  "rice" => [500,1000,1500]
);

foreach($food_price as $key=>$value) {
  $sum = 0;
  foreach($value as $i) {
    $sum += $i;
  }
  echo $key."の合計金額は".$sum."円です\n";
}

?>

<!-- 商品の合計金額を出力する -->