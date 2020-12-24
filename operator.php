<h2>運算子</h2>
<hr>
<h3>一元運算子</h3>
<h3> 1. !</h3>
<?php

$a=true;
echo $a;

$a=false;
echo !$a;
// "!"是not，相反的意思
?>

<h3> 2. ++</h3>

<?php
$a="10";

// $a=$a+1;
$a++;

echo $a;

?>
<br>

<h3>二元運算子</h3>
<?php

$a=10;
$b=20;
// echo $a+$b;
$c=$a+$b;

echo $c;

?>

<h5>%</h5>
<?php

$a=17;
$b=5;

// 符號"%" (mod) 意義為取餘數
echo $a%5;

?>

<hr>
<h3>三元運算子</h3>
<h3> 1. ?:</h3>
<?php
$a=60;
?>

<pre>
if($a>=60){
    echo"及格";
}else{
    echo"不及格";
}
</pre>

<?php

echo ($a>=60)?"及格":"不及格";

?>