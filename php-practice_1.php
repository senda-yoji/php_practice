<?php
// Q1 変数と文字列
$name = '千田';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo $num / 2;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');
// $year = date('Y');
// $month = date('m');
// $day = date('d');
// $hour = date('H');
// $min = date('i');
// $sec = date('s');
// echo '現在の時刻は' . $year . '年' . $month . '月' . $day . '日' . $hour . '時' . $min . '分' . $sec . '秒です。';
echo '現在の時刻は' . date('Y年m月d日H時i分s秒').'です。';
// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'mac' || $device === 'windows') {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 15;
$message = ($age < 18) ? '未成年' : '成人';
echo $message . 'です。';

// Q6 配列
$kanto = ['東京', '神奈川', '埼玉', '千葉', '群馬', '栃木', '茨城'];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefectureCapital = ['東京' => '新宿区', '神奈川' => '横浜市', '埼玉' => 'さいたま市', '千葉' => '千葉市', '群馬' => '前橋市', '栃木' => '宇都宮市', '茨城' => '水戸市'];
echo $prefectureCapital['東京'] . "\n";
echo $prefectureCapital['神奈川'] . "\n";
echo $prefectureCapital['埼玉'] . "\n";
echo $prefectureCapital['千葉'] . "\n";
echo $prefectureCapital['群馬'] . "\n";
echo $prefectureCapital['栃木'] . "\n";
echo $prefectureCapital['茨城'] . "\n";

foreach ($prefectureCapital as $y) {
  echo $y . "\n";
}


// Q8 連想配列-2

foreach ($prefectureCapital as $x => $y) {
  if ($x === '埼玉') {
    echo $x . '県の県庁所在地は' . $y . 'です。';
  }
}


// Q9 連想配列-3

$prefectureCapital['北海道'] = '札幌市';
$prefectureCapital['沖縄'] = '那覇市';

foreach ($prefectureCapital as $x => $y) {
  if (in_array($x, $kanto, true)) {
    echo $x . '県の県庁所在地は' . $y . 'です。' . "\n";
  } else {
    echo $x . 'は関東地方ではありません。' . "\n";
  }
}

// Q10 関数-1

function hello($name)
{
  echo $name . 'さん、こんにちは。';
}

hello('金谷');
hello('安藤');

// Q11 関数-2

function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  return $taxInPrice;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($number)
{
  if ($number % 2 === 0) {
    echo $number . 'は偶数です。';
  } else {
    echo $number . 'は奇数です。';
  }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grade)
{

  switch ($grade) {
    case 'A':
    case 'B':
      echo '合格です。';
      break;

    case 'C':
      echo '合格ですが追加課題があります。';
      break;

    case 'D':
      echo '不合格です。';
      break;

    default:
      echo '判定不明です。講師に問い合わせてください。';
      break;
  }
}

evaluateGrade('d');
evaluateGrade('B');
