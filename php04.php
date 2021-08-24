<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function twice($a){return $a*2;}
echo twice(6)."<br />";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){return $a+$b;}
echo add(10,5)."<br />";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1,3,5,7,9);
function mult($arr){
    $a = 1;
    foreach($arr as $value){
        $a *= $value;
    }
    return $a;
}
echo mult($arr). "<br />";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr) {
    // とりあえず配列の最初の要素を1番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($a>$max_number){
            $max_number = $a;
        }
    }
    return $max_number;
    }
echo max_array($arr). "<br />";
?>

<?php
//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください
//strip_tagsは文字列からHTMLおよびPHPタグを取り除く
$text = '<p>文章を表示。</p><a href="#fragment">他の文章</a>';
echo strip_tags($text)."<br />";
//array_pushは一つの要素を配列の最後に追加する
$arr = array(1,3,5,7,9);
array_push($arr,11,13);
print_r($arr);
echo "<br />";
//array_mergeはひとつまたは複数の配列をマージする
$arr1 = array("color" => "red",2,4);
$arr2 = array("a" ,"b", "color" => "green", "shape" => "trapezoid" ,4);
$arr3 = array("color" => "white");
$result1 = array_merge($arr1,$arr2,$arr3);
print_r($result1);
echo "<br />";
$result2 = array_merge($arr3,$arr2,$arr1);
print_r($result2);
echo "<br />";
//timeは現在のUnixタイムスタンプを返す
//mktime日付をUnixタイムスタンプとして取得する
//dateは指定されたタイムスタンプを、与えられたフォーマット文字列によりフォーマット化し、日付文字列に返す。
echo "現在の時間は、". date('Y-m-d',time()). "です。<br />";
echo "2021年3月の末日は、". date('Y-m-d',mktime(0,0,0,4,0,2021)) ."です。<br />";
?>