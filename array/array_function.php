<h1>陣列函式</h1>
<h3>is_array()</h3>
<?php

$a = [1, 2, 3];
$b = "天氣";
echo '$a=>' . is_array($a);
echo "<br>";
echo '$b=>' . is_array($b);
if (is_array($b)) {
    echo '$b is an array';
} else {
    echo '$b is not an array';
}
?>
<hr>

<h3>in_array()</h3>
$a=['A','B','C'];

<?php
$a = ['A', 'B', 'C'];

echo in_array("C", $a) . "<br>";

if (in_array('C', $a)) {
    echo 'C有在陣列中';
} else {
    echo 'C沒有在陣列中';
}

?>

<hr>

<h3>sort()排序</h3>
$a=['D','C','B','A'];
<?php
$a = ['D', 'E', 'B', 'C', 'A'];
echo "<br>";
print_r($a);
echo "<br>";
sort($a);
print_r($a);
echo "<br>";
echo "<br>";
?>

$a=['國文'=>'D','英文'=>'A','數學'=>'C'];

<?php
$a = ['國文' => 'B', '英文' => 'A', '數學' => 'C'];
echo "<br>";
sort($a);
print_r($a);

?>
<hr>

<h3>array_fill</h3>
<?php
$a = array_fill(0, 6, '呵呵');

echo "<pre>";
print_r($a);
echo "</pre>";

?>
<hr>
<h3>array_search</h3>
找成績A的科目：
<?php
$a = ['國文' => 'B', '英文' => 'A', '數學' => 'C'];

echo array_search('A',$a);

echo "<br>";

$a = ['D', 'E', 'B', 'C', 'A'];
echo array_search('A',$a);
?>
<hr>

<h3>array_keys()</h3>
<?php

$a = ['國文' => 'B', '英文' => 'A', '數學' => 'C'];

$keys=array_keys($a);

echo "<pre>";print_r($keys);echo "</pre>";
?>
<hr>

<h3>array_merge()</h3>
<?php

$a=[1,2,3];
$b=['A','B','C'];

$c=array_merge($a,$b);
echo "<pre>";print_r($c);echo "</pre>";

$c=array_merge($a,$b);
echo "<pre>";print_r($c);echo "</pre>";


?>

<hr>
<h3>serialize 序列化</h3>
<?php
$a = ['國文' => 'B', '英文' => 'A', '數學' => 'C'];

echo serialize($a);
?>
<hr>

<h3>implode 陣列轉字串 & explode 字串轉陣列</h3>
<?php
$a = ['國文' => 'B', '英文' => 'A', '數學' => 'C'];

$result=implode(',',$a);

echo "字串：" . $result . "<br>";

print_r(explode(',',$result));

?>
