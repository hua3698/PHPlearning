<?php

//function 宣告跟執行的位置沒有先後順序，因為瀏覽器會先閱讀function
function myphone($a, $b)
{

    // echo $a+$b;   不會有回傳值
    return $a + $b;
}

$a = myphone(1, 10) + 10;  //使用echo不會有回傳值

$return = myphone(1, 10) + 10;

echo $return;


?>

<h3>畫星星</h3>

<?php

stars(1,5);
stars(2,10);

function stars($type,$lines){
    switch($type){
        case 1:
            type1($lines);
        break;
        case 2:
            type2($lines);
        break;
        case 3:
            type3($lines);
        break;
    }
}

//直角三角形
function type1($line){
    for ($i = 1; $i <= $line; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

//正三角形
function type2($size){
for($i=1;$i<=$size;$i++){
    //先印空白
    
    for($k=1;$k<=($size-$i);$k++){
        echo "&nbsp;";
    }  

    //再印星星
    for($j=1;$j<=(2*$i-1);$j++){
        echo "*";
    }
    
    echo "<br>";
}
}

//菱形
function type3($size){
    $size=($size%2)?$size:$size+1;
    $max=ceil($size/2);
    for($i=1;$i<=$size;$i++){
        if($i%$max==0){
            $m=$max;
        }else{
            $m=$i%$max;
        }
    
        if($i>$max){
            $m=$max-$m;
        }
    
        for($k=1;$k<=($max-$m);$k++){
            echo "&nbsp;";
        }  
        for($j=1;$j<=(2*$m-1);$j++){
            echo "*";
        }
        echo "<br>";
    
    }
}

?>