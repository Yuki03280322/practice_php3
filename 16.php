<?php
function extra_end($str) {
  $cut = substr($str, -2, 2);
  echo $cut.$cut.$cut."\n";
}
extra_end('world');
extra_end('goodbye');
?>