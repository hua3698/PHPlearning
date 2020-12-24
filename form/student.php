<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資料輸入</title>
</head>

<body>
    <pre>
建立一個輸入畫面
建立一個學生資料陣列
輸入學生班級座號，顯示學生詳細資料

    </pre>
    <?php
    $student = [
        '01' => [
            '姓名' => '小名',
            '國文' => '11',
            '英文' => '22',
            '身高' => '166',
            '體重' => '66'
        ],
        '02' => [
            '姓名' => '小王',
            '國文' => '33',
            '英文' => '44',
            '身高' => '186',
            '體重' => '55'
        ],
        '03' => [
            '姓名' => '小陳',
            '國文' => '55',
            '英文' => '66',
            '身高' => '161',
            '體重' => '63'
        ],
        '04' => [
            '姓名' => '小張',
            '國文' => '77',
            '英文' => '88',
            '身高' => '166',
            '體重' => '66'
        ],
        '05' => [
            '姓名' => '小林',
            '國文' => '99',
            '英文' => '100',
            '身高' => '166',
            '體重' => '66'
        ]
    ];

    if (!empty($_POST['num']) || !empty($_GET['num'])) {
        // echo "你查詢的學生為{$_POST['num']}號"; 陣列放入字串裡的兩種方法

        if(isset($_POST['num'])){
            $num=$_POST['num'];
        }else{
            $num=$_GET['num'];
        }

        $stu=$student[$num];
        echo "你查詢的學生為$num 號<br>";
        echo $stu['姓名']."<br>";
        echo "國文成績：".$stu['國文']."<br>";
        echo "英文成績：".$stu['英文']."<br>";
        echo "<div><a href='form.php?num={$num}&height={$stu['身高']}&weight={$stu['體重']}'>查詢BMI</a></div>";
        echo "<div><a href='student.php'>重新查詢</a></div>";

    } else {

    ?>
        <form action="student.php" method="post">
            <h5>請輸入座號來查詢學生資料</h5>
            <input type="text" name="num"><input type="submit" value="查詢">
        </form>
    <?php
    }
    ?>
</body>

</html>