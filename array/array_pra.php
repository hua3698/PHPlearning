<h1>大樂透</h1>

<?php
// 亂數函式rand(x,y)

$lottery=[];
while(count($lottery)<6){
    $t=rand(1,49);
    if(!in_array($t,$lottery)){
        $lottery[]=$t;
        // array_push($t,$lottery);
    }
}
echo "<pre>";
print_r($lottery);
echo "</pre>";

// for($i=0;$i<6;$i++){
//     echo rand(1,49)."<br>";
// }
?>

<h1>威力採</h1>
<?php
// 亂數函式rand(x,y)

$lottery=[];
$second=rand(1,8);

while(count($lottery)<6){
    $t=rand(1,38);
    if(!in_array($t,$lottery)){
        $lottery[]=$t;
    }
}
$lottery[]=$second;
echo "<pre>";
print_r($lottery);
echo "</pre>";
?>

<h1>兌獎</h1>
中獎號碼:<br>
    第一組:08,15,21,24,26,30<br>
    第二組:07<br>

<?php
$treasure_1=[8,15,21,24,26,30];
$treasure_2=[7];

$lottery=[];
$second=rand(1,8);

while(count($lottery)<6){
    $t=rand(1,38);
    if(!in_array($t,$lottery)){
        $lottery[]=$t;
    }
}
$lottery[]=$second;
echo "<pre>";
print_r($lottery);
echo "</pre>";
?>
<hr>

<?php
// array_pop 將陣列中的最後一個元素拿掉
$l2=array_pop($lottery);
if($l2==$treasure_2){
    $res_2=1;
}else{
    $res_2=0;
}

$res_1=0;
foreach($treasure_1 as $t){
    foreach($lottery as $l){
        if($t==$l){
            $res_1=$res_1+1;
        }
    }
}

echo "<br>";
echo "第一組中了". $res_1 . "個號碼";
echo "<br>";
echo "第二組中了". $res_2 . "個號碼";


?>

<h1>基礎練習</h1>
<h3>五百年內的閏年</h3>
<?php
$year=date("Y");
$array=[];

for($i=0;$i<500;$i++){
    ($year+$i);
    if(($year+$i)%4 == 0 && ($year+$i)%100 !=0 || ($yeay+$i)%400==0 && ($year+$i)%3200 !=0){
        $array[]=$year+$i;
    }
}

echo "五百年內的閏年:<br>";
foreach($array as $$year){
    echo $year."<br>";
}
echo "一共有".($array)."個閏年";

?>

<h3>天干地支</h3>
<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$match=[];
for($i=0;$i<60;$i++){
    $match[1024+$i]=$sky[$i%10].$land[$i%12];
}

print_r($match);
echo "<br>";
echo $match[1096];

?>
<h3>陣列的元素順序反向</h3>
<?php

$a=[2,4,6,1,8];
echo "原本的陣列";
echo "<pre>";
print_r($a);
echo "</pre>";

for($i=0;$i<ceil(count($a)/2);$i++){
    $tmp;
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;
}

echo "反序後的陣列:";
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";
?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

