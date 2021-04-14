<?php
function count_code($str) {
  $count = mb_strpos($str,"code");
  if ($count >= 0) {
    echo ($count+1)."番目に該当の文字あり\n";
  } else {
    echo "該当の文字なし\n";
  }
}

count_code("acodecount");
count_code("codecount");
count_code("wherecodefrom");
?>

<!-- 文字列から文字を検索しその文字が左から何番目にあるか -->