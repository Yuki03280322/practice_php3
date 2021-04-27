<?php
function withdraw($balance, $amount) {
  $fee = 110;
  if (($balance + 110) >= $amount) {
    $result = $balance - $amount - $fee;
    echo $amount. "円引き落としました。残高は". $result. "円です\n";
  } else {
    echo "残高不足です。残り残高:". $balance. "円\n";
  }
}

$balance = 200000;
echo "いくら引き落としますか？\n";
$amount = rtrim(fgets(STDIN));
withdraw($balance, $amount);
?>

<!-- 銀行から引き出し -->