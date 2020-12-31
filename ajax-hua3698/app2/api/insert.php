<?php
//處理新增資料的請求
include_once "../base.php";

$res=$Classroom->save($_POST);

if($res){
    echo "成功";
}else{
    echo "失敗";
} 

// to('../index.php');
//改成背景作業 不需要倒回頁面

?>