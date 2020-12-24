<h1>字串常用函式</h1>
<h3>(1.) substr/mb_substr 擷取字串</h3>
<?php

$str="Lorem ipsum dolor sit amet,consectetur. adipisicing elit. Voluptatum facilis, perspiciatis necessitatibus,ipsa reiciendis";
$substr=mb_substr($str,21,5);
// 擷取片段字串的作法

echo $substr;
echo "<br>";

$substr_from_tail=mb_substr($str,-15,5);
// 從字串尾巴開始擷取自串

echo $substr_from_tail;
?>
<hr>

<h3>(2.) trim 去除頭尾空格</h3>
<hr>

<h3>(3.) str_repeat(); 重複指定字元</h3>
<?php
echo str_repeat('*',10);
echo "<br>";
echo str_repeat('clair',30);

?>
<hr>

<h3>(4.) str_replace 字串取代</h3>
<?php

$str_replace='claire';

$result=str_replace('Lorem',$str_replace,$str);

echo $str;
echo "<br>";
echo $result;
// 此函式在取代字串後，不會改變原本字串內容

?>
<hr>

<h3>(5.) explode 分割字串</h3>
<?php

$str_array=explode(' ',$str);
$str_array1=explode(',',$str);
$str_array2=explode('Voluptatum',$str);

echo "<pre>";
print_r($str_array);
print_r($str_array1);
print_r($str_array2);
echo "</pre>";

?>
<hr>

<h3>(6.) strpos() 尋找字串在首次出現的位置</h3>
<?php

$target='dolor';
echo strpos($str,$target);
echo "<br>";
$target2='adipisicing';
echo strpos($str,$target2);

?>
<hr>

<h3>(7.) strlen 計算字串長度</h3>
<?php

$mb_str='今天的天氣很chill';

echo strlen($mb_str);  /* 一個中文字計算為3字元 */
echo "<br>";
echo mb_strlen($mb_str);  /* 一個中文字或一個英文字母皆為1字元 */
echo "<br>";

?>
<hr>

<h3> 基礎練習 </h3>
<?php
echo "第一題" . "<br>";

$str="aaddw1123";
$target=str_repeat('*',mb_strlen($str));
// $result=str_replace($str,$target,$str);

echo "$target" . "<br><br>";
?>

<?php
echo "第二題" . "<br>";

$str="this,is,a,book";
print_r(explode(',',$str));
echo "<br><br>";

?>

<?php
echo "第三題" . "<br>";
echo implode(" ",explode(',',$str));
echo "<br><br>";

?>

<?php
echo "第四題" . "<br>";
$str="The reason why a great man is great is that the man resolves to be a great man";
echo mb_substr($str,0,10). "...";
?>


