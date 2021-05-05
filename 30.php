<?php
echo "年を入力してください\n";
$year = trim(fgets(STDIN));
echo "月を入力してください\n";
$month = trim(fgets(STDIN));

function get_days($year, $month) {
  $month_days = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  if($month == 2) {
    if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
      $month_days = array(1 => 29);
    } 
  }
  $days = $month_days[$month - 1];
  return $days;
}
$days = get_days($year, $month);
echo $year. "年". $month. "月は". $days. "日間あります\n";
?>