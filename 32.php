<?php
$name = trim(fgets(STDIN));
if(strpos($name, 'a') !== false) {
  $name = str_replace('a', '', $name);
}
if(strpos($name, 'i') !== false) {
  $name = str_replace('i', '', $name);
}
if(strpos($name, 'u') !== false) {
  $name = str_replace('u', '', $name);
}
if(strpos($name, 'e') !== false) {
  $name = str_replace('e', '', $name);
}
if(strpos($name, 'o') !== false) {
  $name = str_replace('o', '', $name);
}
if(strpos($name, 'A') !== false) {
  $name = str_replace('A', '', $name);
}
if(strpos($name, 'I') !== false) {
  $name = str_replace('I', '', $name);
}
if(strpos($name, 'U') !== false) {
  $name = str_replace('U', '', $name);
}
if(strpos($name, 'E') !== false) {
  $name = str_replace('E', '', $name);
}
if(strpos($name, 'O') !== false) {
  $name = str_replace('O', '', $name);
}

echo $name;
echo PHP_EOL;


?>

<!-- 入力された文字列から特定の文字を削除し出力 -->