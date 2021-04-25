<?php
function end_other($str1, $str2) {
  $str1_mini = strtolower( $str1 );
  $str2_mini = strtolower( $str2 );
  $str1_count = strlen($str1_mini);
  $check = substr($str2_mini, -($str1_count));
  if ($str1_mini == $check) {
    echo "True\n";
  } else {
    echo "False\n";
  }
}

end_other('yahoo', 'googleyahoo');
end_other('hello', 'goodbye');
end_other('japan', 'japanjapanese')
?>

<!-- 特定の文字が指定の場所に合致するかどうか -->