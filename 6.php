<?php
function count_who($str) {
  $result = preg_match("/who/i", $str);
  if ($result) {
    echo "マッチしました\n";
  } else {
    echo "マッチしませんでした\n";
  }
}

count_who("whoareyou");
count_who("whereareyoufrom?");
count_who("Whoareyouwhowho");

function count_what($char) {
  $result = preg_match_all("/what/", $char);
  if ($result) {
    echo $result."件マッチしました\n";
  } else {
    echo "マッチしませんでした\n";
  }
}

count_what("whatwhatwho");
count_what("whywhowhere");
count_what("WhatWhatwhat")

?>

<!-- 文字列から特定の文字を検索する -->