<h1>陣列宣告</h1>
<hr>
<p>$a=array();</p>
<p>print_r($a);</p>
<p>var_dump($a);</p>

<?php

$a = array();

echo "print_r=";
print_r($a);
echo "<br>";

echo "var_bump=";
var_dump($a);
echo "<br>";
?>


<hr>
<h2>陣列宣告並給值</h2>
<p>$a=[1,2,3];</p>
<p>$a[]=1;</p>
<p>$a[]=2;</p>
<p>$a[]=3;</p>
<p></p>
<?php
echo "方法1" . "<br>";
$a = [1, 2, 3];
print_r($a);
echo "<br>" . "<br>";

echo "方法2" . "<br>";
$b[] = 1;
$b[] = 2;
$b[] = 3;
print_r($b);
echo "<br>" . "<br>";


echo "方法3" . "<br>";
$c['A01'] = "方大同";
$c['A02'] = "王曉明";
$c['A03'] = "楊穎";
print_r($c);

?>
<hr>
<h2>陣列的使用</h2>
<?php

echo $a[1]; /* 索引值第1位的數值 */
$a[1] = 641561; /* 改變陣列數值 */
echo "<br>";
echo $a[1];
echo "<br>";
echo $c['A03'];
?>

<hr>
<hr>

<h3>基礎練習</h3>
<h5>學生成績陣列</h5>
<?php

echo "<方法1>" . "<br>";
$judy = [95, 64, 70, 90, 84];
$amo = [88, 78, 54, 81, 71];
echo "$judy[2]";
echo "<br>" . "<br>";

echo "<方法2>" . "<br>";
$judy = ["國文" => 95, "英文" => 64];
echo "<br>" . "<br>";

echo "<方法3>" . "<br>";
$score = [
    "judy" => ["國文" => 95, "英文" => 64, "數學" => 70, "自然" => 90, "社會" => 84],
    "amo" => ["國文" => 88, "英文" => 78, "數學" => 54, "自然" => 81, "社會" => 71],
    "john" => ["國文" => 11, "英文" => 22, "數學" => 33, "自然" => 77, "社會" => 99]
];
echo "<br>" . "<br>";

echo "<方法4>" . "<br>";
$a = ["name" => "judy", "score" => ["國文" => 95, "英文" => 64]];
$b = ["name" => "amo", "score" => ["國文" => 88]];
?>