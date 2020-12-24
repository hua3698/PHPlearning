<h2>數列</h2>
<h4>Q1:求1+2+3+...+n的和</h4>
<?php

$n=50;
$sum=0;

for($i=1;$i<=$n;$i++){

    $sum=$sum+$i;
}

echo '$n='.$n;
echo '<br>';
echo '總和：'.$sum;

?>

<h4>Q2:求0+1-2+3-4...+n的和</h4>
<h5>解法1</h5>
<?php

$n=159;
$sum=0;

for($i=0;$i<=$n;$i++){

    if($i%2==1){
        
        $sum=$sum+$i;
    }else{

        $sum=$sum-$i;
    }
}

echo '$n='.$n;
echo '<br>';
echo '總和：'.$sum;

?>
<h5>解法2</h5>
<p>
    n=奇數， -1*n+(n+1)
    n=偶數， -1*n
</p>

<h4>Q3:求費式數列</h4>
<p>恩... 再說</p>