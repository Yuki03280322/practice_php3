<?php
function xyz_there($str) {
  if(strpos($str, '.xyz')) {
    echo "False\n";
  } elseif(strpos($str, 'xyz')) {
    echo "True\n";
  } else {
    echo "xyzは含みません\n";
  }
}

xyz_there('adds.xyz');
xyz_there('abcxyz');
xyz_there('abc.xyz');
xyz_there('axyz.abc');
xyz_there('azbycx');
xyz_there('a.zbycx');
?>