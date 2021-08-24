<?php

function sum($max) {
    $result = 0;
    for ($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    return $result;
}
echo sum(100) . "<br />";

//1から100までを順番に表示させる関数
function print_number(){
    for ($i = 0; $i <= 100; $i++){
        echo $i . "<br />";
    }
}
//echo print_number();

//strlen : 文字列の長さを取得する
$string = 'ABCDEF';
echo strlen($string) . "\n";
echo "<br />";
?>

str_replace : 文字列を置換する <br />

<?php

$string = "I love Ruby!";
//Ruby という文字列をPHPに置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string . "<br />";
?>

count : 配列の要素の個数を取得する <br />
<?php
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array) . "\n";
?>

asort, arsort : 配列をソート（並び替え）する <br />
<?php
//何番目が何位と表示するだけのよう
$array = array(2,5,9,7,3,1,8,6,4);
asort($array); //昇順sort
print_r($array); //配列を表示print_r

arsort($array); //降順sort
print_r($array); 
?>
