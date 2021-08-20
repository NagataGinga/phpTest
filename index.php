<?php

$test = "これはサンプルです。" ;
$testNum = 123 ;

echo $test;
echo $testNum;

//連想配列
$animals = [
    "cat" => "<br />猫",
    "dog" => "<br />犬",
    "bird" => "<br />鳥"
];
//$animalsから"猫"を取り出して表示する。
echo $animals["cat"];

// . は文字列を連結させる演算子
$value = "AAA";
echo $value . "BBB";

//論理演算結果をターミナルで表示するには、echoではなくvar_dump()
//（補足）echo"<pre>";とecho"</pre>";で挟むと改行される⇒書式が崩れた
//=== は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;

echo "<pre>";
$result = $a == $b;
var_dump($result);

$result = $a === $b;
var_dump($result);
echo "</pre>";

//複合演算　+=,-=のように、.=は後述のものを連結する
$value = 'apple';
$value .= ' orange';
echo $value;
//三項演算　(論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';
echo $result;


?>