<h2>while 迴圈</h2>
<hr>
<h4>尋找字元</h4>
<?php

$str="今天天氣真的不太好";
$target="真";

echo "字串=".$str."<br>";
echo "尋找=".$target."<br>";

echo mb_strlen($str);
echo "<br>";
echo mb_substr($str,3,1);
?>
<h4>for寫法</h4>
<ol>
    <li>用for迴圈來找</li>
    <li>知道字串長度</li>
    <li>知道截取一個字元的方法</li>
    <li>代入For迴圈</li>
    <li>每一個字元和target做比較</li>
    <li>比較為true時就中斷程式</li>
    <li>回傳找到的位置</li>
</ol>

<?php

for($i=0 ;$i<mb_strlen($str);$i++ ){

    $s=mb_substr($str,$i,1);

    if($s==$target){

        echo "找到了,位置在$i";
    break;
    }

}

?>

<h4>while寫法</h4>
<ol>
    <li>用while迴圈來找</li>
    <li>有找到就好</li>
    <li>知道截取一個字元的方法</li>
    <li>代入while迴圈</li>
    <li>每一個字元和target做比較</li>
    <li>比較為true時回傳找到的位置</li>
</ol>
<?php

$notfind=true;

$position=0;

while($notfind){

    $s=mb_substr($str,$position,1);

    if($s==$target){

        echo "找到了，位置在$position";
        $notfind=false;

    }else{

        $position++;

    }

}

?>

?>
<h4>用函式找</h4>
mb_strpos($source,$target)<br>

<?php

    echo "找到了，位置在".mb_strpos($str,$target);


?>