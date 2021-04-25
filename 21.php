<?php
class Jankenpon {
  public function player() {
    echo "じゃんけんで出す手の数字を入力してください\n";
    echo "1:グー\n";
    echo "2:チョキ\n";
    echo "3:パー\n";
    $player_handnumber = (int)fgets(STDIN);
    return $player_handnumber;
  }
  
  public function enemy() {
    $janken = array(1,2,3);
    $enemy_handnumber = array_rand($janken);
    return $enemy_handnumber;
  }

  public function jankenbattle($player_handnumber, $enemy_handnumber) {
    if ($player_handnumber == 1) {
      $player_hand = "グー";
    } elseif ($player_handnumber == 2) {
      $player_hand = "チョキ";
    } else {
      $player_hand = "パー";
    }
    if ($enemy_handnumber == 1) {
      $enemy_hand = "グー";
    } elseif ($enemy_handnumber == 2) {
      $enemy_hand = "チョキ";
    } else {
      $enemy_hand = "パー";
    }
    echo "あなたの手は". $player_hand. "です\n";
    echo "相手の手は". $enemy_hand. "です\n";
    if ($player_handnumber === $enemy_handnumber) {
      echo "あいこです\n";
      return true;
    } elseif ($enemy_handnumber - $player_handnumber == 1 || $enemy_handnumber - $player_handnumber == -2 ) {
      echo "あなたの勝ち！\n";
    } else {
      echo "あなたの負け！\n";
    }
  }
}

$jankenpon = new Jankenpon();
$player = $jankenpon->player();
$enemy = $jankenpon->enemy();
$jankenbattle = $jankenpon->jankenbattle($player, $enemy);

if ($jankenbattle == true) {
  $player = $jankenpon->player();
  $enemy = $jankenpon->enemy();
  $jankenbattle = $jankenpon->jankenbattle($player, $enemy);
}
?>

<!-- じゃんけん -->