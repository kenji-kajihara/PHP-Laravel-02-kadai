<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($result){
    return $result*2;
}
echo double(2);
?>

<?php
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
    return $a+$b;
}
echo f(4,2);
?>

<?php
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

$arr = array(1,3,5,7,9);
 function doub($arr){
     $result = 1;
     foreach($arr as $a){
         $result *= $a;
     }
     return $result;
 }
 echo doub($arr);
?>

<?php
//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$arr = array(2,4,6,8,10);
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number<$a){
     $max_number=$a;
 }
 } return $max_number;
 }
 echo max_array($arr);


?>

<?php
/*
5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
strip_tags
array_push
array_merge
time, mktime
date
*/
//strip_tags
$str = "<h1>techboost</h1><p>テックブースト</p>" ;
echo strip_tags($str,"<h1>");
?>

<?php
//array_push
$fruite = array("orange","lemon");
array_push($fruite,"apple");
print_r($fruite);
?>

<?php
//array_merge
$array1 = array(1,2,3);
$animal = array("dog","cat","sheep");
$fruite = array("apple","orange","lemon");
$array = array_merge($array1,$animal,$fruite);
print_r($array);
?>

<?php
//time,mktime
echo "現在のタイムスタンプ". time(). "\n";
$nextweek = time()+(7*24*60*60);
echo "NEXT WEEK". date("Y/m/d",$nextweek)."\n";

$mybirthday = mktime(0,0,0,7,12,1994);
echo "私の誕生日のタイムスタンプは". $mybirthday."です";
?>

<?php
//date
date_default_timezone_set("Asia/Tokyo");
echo "本日は".date("Y/m/d")."です";
?>