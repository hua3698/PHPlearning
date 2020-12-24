<style>
    table{
        text-align: center;
        border-collapse:collapse;
    }
    td{
        border:1px solid #999;
        width:50px;
        padding:5px 5px;
    }

</style>

<h2>迴圈結構</h2>
<hr>
<table>

<?php

for($j=1;$j<=9;$j++){
    
    echo"<tr>";

    for($i=1;$i<=9;$i++){

        echo "<td>".$i."x".$j."=".($i*$j)."</td>";
    }

    echo"</tr>";
}
?>
</table>

<h2>範例練習-九九乘法表</h2>

<table>
    <?php
    
    for($i=1;$i<=9;$i++){

        echo"<tr>";
        
        for($j=1;$j<=9;$j++){

            echo "<td>".$i*$j."</td>";
        }

        echo"</tr>";
        
    }
    ?>
</table>

<h3>老師解答</h3>
<table>  
<?php

    for($i=0;$i<10;$i++){

        echo"<tr>";
        
        for($j=0;$j<10;$j++){
            if($i==0 && $j==0){
                echo "<td style='background:#eee'></td>";
            }else if($i==0){
                echo"<td style='background:#eee'>$j</td>";
            }else if($j==0){
                    echo"<td style='background:#eee'>$i</td>";
                }
                else{   
                    echo "<td>".($i*$j)."</td>";
                }
            }
        echo"</tr>";
        
    }
?>
</table>