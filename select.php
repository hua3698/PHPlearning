<h1>程式練習</h1>
<h3>if...else 判斷式</h3>
<hr>
<h5>成績及格判斷</h5>
<?php

$score=50;

echo "成績：".$score;
echo "<br>判斷結果：";


if($score>=60){
    echo"及格";
}else{
    echo"不及格";
}

?>

<hr>    
<h5>成績等級判斷</h5>
<h5>寫法一</h5>
<pre>
if($score >=0 && $score<=100){

    if($score>=90 && $score<=100){
        echo "A";
    }else{

        if($score>=75 && $score<90){
            echo "B";
        }else{

            if($score>=60 && $score<75){
                echo "C";
            }else{
                echo "D";
                }
            }
        }
    
}else{
    echo "<span style='color:red'>成績必須在0~100內</span>";
}

</pre>

<h5>寫法二</h5>
<pre>
    if($score>=0 && $score<=100){
        
        if($score>=90 && $score<=100){
            echo "A";
        }else if($score>=75 && $score<90){
            echo "B";
        }else if($score>=60 && $score<75){
            echo "C";
        }else{
            echo "D";
        }
                
    }else{
        echo "<span style='color:red'>成績必須在0~100內</span>";
    }

</pre>



<h5>寫法三</h5>

<pre>
    if($score <0 || $score>100){
        echo "<span style='color:red'>成績必須在0~100內</span>";
    }else if($Score>=90){
        echo "A";
        else if($score >=75){
            echo "B";
        }
        else if($score >=60){
            echo "C";
        }
        else if($score <60){
            echo "D";
        }
    
</pre>

<hr>

<h2>基礎練習</h2>

<h3>閏年判斷</h3>
<?php
$year=2020;

echo "年份".$year;
echo "<br>";
echo "是否為閏年：";

if($year%4 != 0 ){
    echo "平年";
}else if($year%4 == 0 && $year%100 !=0){
    echo "閏年";
}
else if($year%100 ==0 && $year%400 !=0){
    echo "平年";
}
else if ($year%400 ==0 && $year%3200 !=0){
    echo "閏年";
}
?>

<h3>老師解答</h3>
<?php
$year=1900;

echo "年份".$year;
echo "<br>";
echo "是否為閏年：";

if($year%4==0){

    if($year%100 != 0){
        echo "閏年";
    }else{
        if($year%400 ==0){

            if($year%3200 ==0){
                echo "不是";
            }else{

                echo"閏年";
            }
        }else{
        echo "不是";
        }
    }
}else{
    echo "不是";
}
?>

<h3>switch ... case 選擇</h3>
<hr>
<pre>
    switch(case){
        case "":

        break;
        case "":

        break;
        default:
    }

</pre>


<pre>
$score=80;
$level="";

if($score >=0 && $score<=100){

    if($score>=90 && $score<=100){
        $level= "A";
    }else{

        if($score>=75 && $score<90){
            $level= "B";
        }else{

            if($score>=60 && $score<75){
                $level= "C";
            }else{
                $level= "D";
                }
            }
        }
    
}else{
    echo "<span style='color:red'>成績必須在0~100內</span>";
}


 echo "成績：".$score;
 echo "<br>";
 echo "等級：".$level;

switch($level){
    case 'A': 
        echo "非常好，請努力保持";
    break;
    case 'B':
        echo "可圈可點，但還有進步的空間";
    break;
    case 'C':
        echo "一般水平";
    break;
    case 'D':
        echo "用心不足";
    default:
    echo "資料錯誤";
}

</pre>
