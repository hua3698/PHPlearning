<h2>while 迴圈</h2>
<hr>
<h4>尋找字元</h4>
<?php

$str="今天天氣真好";
$target="真";

echo "字串=".$str."<br>";
echo "尋找=".$target."<br>";

echo mb_strlen($str); /* 計算字串長度 */
echo "<br>";
echo mb_substr($str,2,1);  /* 知道擷取一個字元的方法 */


?>

<h4>方法1 -> for寫法</h4>
<ol>
    <li>用for迴圈來找</li>
    <li>知道字串長度</li>
    <li>知道擷取一個字元的方法</li>
    <li>帶入for迴圈</li>
    <li>每一個字元和taarget</li>
    <li>比較為true時就中斷程式</li>
    <li>回傳找到的位置</li>
</ol>
<?php

for ($i=0; $i<mb_strlen($str) ; $i++) {
    
    $s=mb_substr($str,$i,1);
    
    if($s==$target){
        
        echo"目標字元位置在$i";
    break;
}

}

?>

<h4>方法2 -> while 寫法</h4>
<ol>
    <li>用while迴圈來找</li>
    <li>有找到就好</li>
    <li>知道擷取一個字元的方法</li>
    <li>帶入while迴圈</li>
    <li>每一個字元和target做比較</li>
    <li>比較為true時回傳找到的位置</li>
</ol>
<?php

$notfind=true;
$position=0;
while ($notfind) {
    
    $s=mb_substr($str,$position,1);

if($s==$target){
    echo"目標位元在$position";
    $notfind=false;
}else{
    $position++;
}

}

?>


<h4>方法3 -> 用函式找</h4>
<?php

echo "目標位置在".mb_strpos($str,$target);


?>

<hr>
<h4>畫星星 練習1</h4>
<?php
for($i=1;$i<=5;$i++){
    
    for($j=1;$j<=$i;$j++){
        
        echo "*";
    }

    echo "<br>";
    
}
?>


<h4>練習2 倒直角三角形</h4>
<?php

for($j=1;$j<=5;$j++){

    for($i=5;$i>=$j;$i--){

        echo "*";
    }
    echo "<br>";
}

?>

<h4>練習3 正三角形</h4>

<p>[寫法1]</p>
<?php

for($i=1;$i<=5;$i++){ 
    
    // 先印空白
    for($k=1;$k<=5-$i;$k++){
        
        echo "&nbsp";
    }
    
    // 再印星星
    for($j=1;$j<=2*$i-1;$j++){
        
        echo "*";
    }
    
    echo "<br>";
}


?>

<p>[寫法2]</p>
<?php

for($i=1;$i<=9;$i=$i+2){
    
    for($k=1;$k<=(4-floor($i/2));$k++){

        echo "&nbsp";
    }
    
    for($j=1;$j<=$i;$j++){
        
        echo "*";
    }
    echo "<br>";
}
?>

<h4>練習4 菱形 </h4>

<p>[寫法1]</p>

<?php

?>

<p>[寫法2]</p>
<?php

for($i=1;$i<=9;$i++){ 
    
    if($i<=5){

        for($k=1;$k<=5-$i;$k++){
            
            echo "&nbsp";
        }
        
        for($j=1;$j<=2*$i-1;$j++){
            
            echo "*";
        }
        
        echo "<br>";
    }else{
        for($k=1;$k<=$i-5;$k++){
            
            echo "&nbsp";
        }
        
        for($j=1;$j<=2*(10-$i)-1;$j++){
            
            echo "*";
        }
        
        echo "<br>";
    }
}
?>

<p>[寫法3]</p>
<?php
for($i=1;$i<=9;$i++){
    if($i%5==0){
        $m=5;
    }else{
        $m=$i%5;
    }

    if($i>5){
        $m=5-$m;
    }
    for($k=1;$k<=5-$m;$k++){
            
        echo "&nbsp";
    }
    for($j=1;$j<=2*$m-1;$j++){
            
        echo "*";}
    
    echo "<br>";

}


?>



<h4>練習5 矩形 </h4>
<?php
for($i=1;$i<=7;$i++){

    for($j=1;$j<=7;$j++){
        
        if($i==1 || $i==7){

            echo "*";
        }else{
            if($j==1 || $j==7){
                
                echo "*";
            }else{
                echo "&nbsp";
            }
        }
    }
    echo "<br>";
}


?>


<h4>練習6 矩形內有對角形 </h4>
<?php
for($i=1;$i<=7;$i++){

    for($j=1;$j<=7;$j++){
        
        if($i==1 || $i==7){
            echo "*";
        }else{
            if($j==1 || $j==7){
                
                echo "*";
            }else{
                if($i==$j || $i+$j==8){
                    echo "*";
                }else{
                        echo "&nbsp";
                    }
                }
            
        }
    }
    echo "<br>";
}


?>
