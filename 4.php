<?php
class Fruit {
  public $name;
  public $price;
  function fresh() {
    echo "当店の果実は採れたて新鮮です";
  }
}

$apple = new fruit;
$apple->name = "Apple";
$apple->price = 150;

echo $apple->name."\n";
echo $apple->price."\n";
echo $apple->fresh()."\n";
?>