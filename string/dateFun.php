<h1>日期函式</h1>
<h5>系統時區設定</h5>
default_date_timezone_set()
<?php

date_default_timezone_set("Asia/Taipei");

?>
<h4>(1.) date()</h4>
<?php

echo date("y.m.d");
echo "<br>";
echo date("Y-m-d");
echo "<br>";
echo date("Y-M-d");
echo "<br>";
echo date("Y-M-D");
echo "<br>";
echo date("Y-m-d"."l");
echo "<br>";

?>
<hr>

<h4>(2.) strtotime() </h4>
<?php
// 顯示秒數
echo strtotime ("2020-10-29");
echo "<br>";
echo strtotime ("2020-10-29 10:51:23");
echo "<br>";
echo strtotime ("+1 days");
echo "<br>";
echo strtotime ("+1 month");
echo "<br>";
echo strtotime ("+1 year");
echo "<br>";
echo date("Y-m-d H:i:s l",strtotime ("+1 year"));
echo "<br>";

echo date("Y年m月d日",strtotime("2020-10-29 +3 days"));
echo "<br>";
echo "有效期限到：". date("Y年m月d日 H時",strtotime("2020-10-29 +3 days"));

?>
<hr>

<h4>基礎練習 </h4>
<h5>計算下一次生日的間隔天數</h5>
<?php

$btd="2021-05-15";
$today=date("Y-m-d");

echo floor((strtotime ($btd)-strtotime($today))/86400);  /* floor無條件捨去 */
echo "<br>";
echo abs(strtotime ($today)-strtotime($btd))/86400;  /* abs 加絕對值 */

if(strtotime($today)>strtotime($btd)){
    $result=strtotime($today)-strtotime($btd);
}else{
    $result=strtotime($btd)-strtotime($today);
}
echo $result/86400;



?>
<hr>
