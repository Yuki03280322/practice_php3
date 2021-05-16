<?php
$line = trim(fgets(STDIN));
if(strpos($line, 'A') !== false) {
  $line = str_replace('A', '4', $line);
}
if(strpos($line, 'E') !== false) {
  $line = str_replace('E', '3', $line);
}
if(strpos($line, 'G') !== false) {
  $line = str_replace('G', '6', $line);
}
if(strpos($line, 'I') !== false) {
  $line = str_replace('I', '1', $line);
}
if(strpos($line, 'O') !== false) {
  $line = str_replace('O', '0', $line);
}
if(strpos($line, 'S') !== false) {
  $line = str_replace('S', '5', $line);
}
if(strpos($line, 'Z') !== false) {
  $line = str_replace('Z', '2', $line);
}
echo $line;
?>
<!-- Leet文字列
PAIZA
P4124
 -->