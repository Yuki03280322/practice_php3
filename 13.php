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

function httpGet($url) {
  $option = [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10,
  ];

  $ch = curl_init($url);
  curl_setopt_array($ch, $option);

  $data = curl_exec($ch);
  $info = curl_getinfo($ch);
  $errorNo = curl_errno($ch);

  if ($errorNo !== CURLE_OK) {
    return [];
  }

  if ($info['http_code'] !== 200) {
    return false;
  }

  return $data;
}

$url = 'https://www8.cao.go.jp/chosei/shukujitsu/syukujitsu.csv';
$data = httpGet($url);
if (!$data) {
  throw new Exception("祝日データ取得に失敗");
}
$data = mb_convert_encoding($data, 'UTF-8', 'SJIS');
$lines = explode("\n", $data);
$holidays = [];
foreach ($lines as $line) {
  $cols = explode(",", $line);
  $holidays[] = [ trim($cols[0]), trim($cols[1]) ];
}

echo "日付を入力してください(入力例:2021/4/22)\n";
$date = trim(fgets(STDIN));

$count = 0;
foreach($holidays as $holiday) {
  if (in_array($date, $holiday)) {
    $count += 1;
  }
}

if ($count > 0) {
  echo "祝日です\n";
} else {
  echo "祝日ではありません\n";
}

?>

<!-- 入力された日付が祝日かどうかを判断する -->