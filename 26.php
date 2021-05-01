<?php
echo "登録したい名前を入力してください(例:YamadaTaro)\n";
$input_name = trim(fgets(STDIN));
if(strpos($input_name, " ")) {
  echo "空白は登録できません\n";
} elseif(strpos($input_name, ".")) {
  echo "ピリオドは登録できません\n";
} else {
  echo "登録できました\n";
}
?>