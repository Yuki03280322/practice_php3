<?php
date_default_timezone_set('Asia/Tokyo');
$week = array(
  "日曜日",
  "月曜日",
  "火曜日",
  "水曜日",
  "木曜日",
  "金曜日",
  "土曜日"
);
echo "今月の末日は".date("t")."日です\n";
echo "今日の曜日は".$week[date("w")]."です\n";

for($i = 1; $i<=date("t"); $i++) {
  echo $i.",";
}

$file = new SplFileObject("syukujitsu.csv");
$file->setFlags(SplFileObject::READ_CSV);
$syuku_array = array();
foreach($file as $line) {
  if(isset($line[1])) {
    $date = date("Y-m-d", strtotime($line[0]));
    $name = $line[1];
    $syuku_array[$date] = $name;
  }
}

?>