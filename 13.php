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
  $option = [//cURL:HTTPリクエストをすることにより、外部サイトの情報を取得することができる関数
    CURLOPT_RETURNTRANSFER => true,//curl_exec()を実行時、返り値を文字列で返す
    CURLOPT_TIMEOUT => 10,//curl関数の実行にかけられる時間の最大値
  ];

  $ch = curl_init($url);//curlセッションを初期化
  curl_setopt_array($ch, $option);//curl転送用の複数のオプションを設定する

  $data = curl_exec($ch);//curlのセッションの実行時に使用,セッションの初期化、オプション設定後に使用
  $info = curl_getinfo($ch);//HTTPステータスコードなどの転送データに関わる情報を取得
  $errorNo = curl_errno($ch);//curlを実行した際に発生したエラーを確認するための記述

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