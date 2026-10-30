<?php
// Q1 tic-tac問題
$hundred = [];
for( $num=1;$num <= 100 ; $num++){
  array_push($hundred,$num);
}

var_dump($hundred);


foreach($hundred as $y){
  if($y % 20 === 0){
    echo "tic-tac\n";
  } elseif ($y % 5 === 0) {
    echo "tac\n";
  } elseif ($y % 4 === 0) {
    echo "tic\n";
  } else {
    echo $y."\n";
  }}

// Q2 多次元連想配列

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
// 問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';
// 問題2
foreach($personalInfos as $x => $y){
  $personalNum = $x+1;
  echo $personalNum."番目の".$y['name']."さんのメールアドレスは".$y['mail']."で、電話番号は".$y['tel']."です";
}
// 問題3
$ageList = [25, 30, 18];

foreach($ageList as $x => $y){
  $personalInfos[$x]['age']=$y;
}

var_dump($personalInfos);

// Q3 オブジェクト-1


class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lang)
    {
        echo $this->studentName.'は'.$lang.'の授業に参加しました。学籍番号:'.$this->studentId;
    }
}

$yamamoto = new Student(123,'山本');
echo "学籍番号".$yamamoto->studentId."番の生徒は".$yamamoto->studentName."です。";

// Q4 オブジェクト-2
$yamada = new Student(120,'山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');

$date1 = new DateTime('1992-04-25');
$date2 = new DateTime();
$diff = $date1->diff($date2);
// var_dump($diff);
echo "あの日から".$diff->days."日が経過しました。";

?>