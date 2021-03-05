<style>
table{
    border-collapse:collapse;
    
}
td{
    border:1px solid #999;
    width:50px;
    padding:5px 5px;
}
#my td:hover{
    background:pink;
}
</style>
<h2>迴圈結構</h2>
<hr>
<h4>經典九九乘法表</h4>
<table>

<?php
    for($j=1;$j<=9;$j++){

        echo "<tr>";

        for($i=1;$i<=9;$i++){

            echo $j."x".$i."=".($i*$j);

        }
        echo "</tr>";

    }

?>
</table>
<h4>矩陣式九九乘法表</h4>

<table style="text-align:center" id="my">
<?php

for($i=0;$i<10;$i++){
    echo "<tr>";
    for($j=0;$j<10;$j++){

        if($i==0 && $j==0){

            echo "<td style='background:#eee'></td>";

        }else if($i==0){

            echo "<td style='background:#eee'>$j</td>";
            
        }else if($j==0){

            echo "<td style='background:#eee'>$i</td>";

        }else{

            echo "<td>".($i*$j)."</td>";
        }

    }

    echo "</tr>";

}

?>
</table>