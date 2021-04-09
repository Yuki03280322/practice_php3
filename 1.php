<?php
$line_size = fgets(STDIN, 256);//入力される行数の取得
//fgets():引数に指定したファイルから1行読み込む
//STDIN:標準入力(standard input)を意味する定数

for( $i = 0; $i < $line_size ; $i++) {
  $year = fgets(STDIN, 256);
  $year = rtrim($year);
  //rtrim:文字列の末尾(右側)のみ削除

  if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year." is a leap year\n";
  } else {
    echo $year." is not a leap year\n";
  }
}

?>