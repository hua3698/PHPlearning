<h1>大樂透彩號</h1>

<?php
//亂數函式rand(x,y)

$lotto=[];
while(count($lotto)<6){
    
    $t=rand(1,49);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
    
}

echo "<pre>";
print_r($lotto);
echo "</pre>";

?>
<h1>威力彩號</h1>
<?php
//亂數函式rand(x,y)

$lotto=[];
$second=rand(1,8);
while(count($lotto)<6){
    $t=rand(1,38);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
    
}
$lotto[]=$second;
echo "<pre>";
print_r($lotto);
echo "</pre>";

?>
<h1>對獎</h1>
中獎號碼:<br>
    第一組:08,15,21,24,26,30;<br>
    第二組:07<br>

<?php
//亂數函式rand(x,y)
$treasure_1=[8,15,21,24,26,30];
$treasure_2=7;
$lotto=[];
$second=rand(1,8);
while(count($lotto)<6){
    $t=rand(1,38);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
    
}
$lotto[]=$second;
echo "<pre>";
print_r($lotto);
echo "</pre>";

$l2=array_pop($lotto);
if($l2==$treasure_2){
    $res_2=1;
}else{
    $res_2=0;
}

//print_r($lotto);
$res_1=0;
foreach($treasure_1 as $t){

    foreach($lotto as $l){

        if($t==$l){
            $res_1=$res_1+1;
        }

    }
}

echo "<br>";

echo "第一組中了".$res_1."個號碼<br>";
echo "第二組中了".$res_2."個號碼<br>";

?>
<h1>五百年內的閏年</h1>
<?php
$year=date("Y");
$array=[];

for($i=0;$i<500;$i++){

    if(($year+$i)%4 == 0 && (($year+$i)%100 != 0  || (($year+$i)%400==0 && ($year+$i) % 3200 !=0))){

        $array[]=$year+$i;
        
    }   
}

echo "五百年內的閏年:<br>";
foreach($array as $year){
    echo $year ."<br>";
}

echo "一共有".count($array)."個閏年";

?>
<h1>已知西元1024年為甲子年，提供一個西元年份，輸出天干地支的年別
</h1>
<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$match=[];
for($i=0;$i<60;$i++){
    $match[1024+$i]=$sky[$i%10] . $land[$i%12];
}

print_r($match);
echo "<br>";
echo count($match);
echo "<br>";
echo $match[1077];

?>
<h1>陣列的元素順序反向</h1>
<?php

$a=[2,41,22,1,8,23,66,79];
echo "原本的陣列:";
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