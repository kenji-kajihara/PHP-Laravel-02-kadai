<?php
$height = 230;
if ($height < 150) {
    echo "150㎝ 未満の方はご乗車できません。";
}   else if ($height >= 200) {
    echo "200㎝ 以上の方はご乗車できません。";
}   else{
    echo "ご乗車になれます。";
}

$weekday = "月曜";
switch ($weekday) {
    case "月曜":
        echo "可燃ごみの日です。";
        break;
    case "水曜":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません。";
        break;
}

for($i = 0 ; $i < 10 ; $i++){
    echo $i ;
}

$total = 0 ;
for($i = 0 ; $i <= 100 ; $i++){
    $total += $i ;
}
echo $total;

echo "\n";

$fruite = array("apple","orange","lemon");
echo count($fruite);

for($i = 0 ; $i < count($fruite); $i++){
    echo "要素は" . $fruite[$i];
    echo"\n";
}


$animals = array("dog","cat","panda");
foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}
