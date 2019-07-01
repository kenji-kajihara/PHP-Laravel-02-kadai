<?php
function sum($max){
    $result = 0;
    for($i = 1 ; $i <= $max ; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
?>

<?php
 $string = "ABCDEFGH";
 echo strlen($string);
 ?>
 
<?php
$array = array(1,2,3,4,5,6,8,8,8);
echo count($array);
?>

<?php
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
?>
<?php
$arrays = array(5,3,1,4,9,7);
asort($arrays);
print_r($arrays);
arsort($arrays);
print_r($arrays);
?>

<?php
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function double($arr){
    return($arr*2);
 }
 $a = array(1,3,5,7,9);
 $b = array_map("double",$a);
 print_r($b);
 
 
 $str = "<h1>tech</h1><p>boost</p>" ;
echo strip_tags($str,"<h1>");
?>
<?php
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

$arr = array(1,3,5,7,9);
 function doub($arr){
     foreach($arr as $a){
         echo $result=$a*2;
     }
     return $result;
 }
echo doub();
?>
<?php
 function max_array($arr){
$max = $arr[0]; // 最大値に配列の最初の値を代入して初期化

// 2 つ目から最後まで、ループ処理
for ($i=1;$i<count($arr);$i++){
  // 最大値より配列の値が大きければ上書きをする
  if($max<$arr[$i]){
     $max=$arr[$i];
  }
}
}
echo max_array($arr); //10
?>