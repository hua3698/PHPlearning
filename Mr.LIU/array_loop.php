<h1>以迴圈產生陣列</h1>
<hr>
<?php

$ninenine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $ninenine[]=$i . ' x ' . $j .' = ' .($i*$j);
    }
}

print_r($ninenine);

?>
<hr>
<?php
echo $ninenine[71];
?>
<hr>

<?php

$ninenine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $ninenine[$i.$j]=$i . ' x ' . $j .' = ' .($i*$j);
    }
}
print_r($ninenine);

echo "<br>";
echo $ninenine[76];
?>
<h1>程式產生二維陣列</h1>

<?php

$ninenine=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $ninenine[$i][$j]=$i . ' x ' . $j .' = ' .($i*$j);
    }
}
print_r($ninenine);

echo "<br>";
echo $ninenine[8][9];
?>

日火木尸火