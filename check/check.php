<?php
session_start();
$_SESSION['error']=[];  //先把前一次儲存的紀錄清空

accept('acc');
length('acc',4,10);
// $acc=$_POST['acc'];
// if(empty($acc)){
//     $_SESSION['error']['acc']['empty']=true;
// }
// if(strlen($acc)>10 || strlen($acc)<4){
//     $_SESSION['error']['acc']['len']=true;
// }


accept('pw');
length('acc',8,16);
// $pw=$_POST['pw'];
// if(empty($pw)){
//     $_SESSION['error']['pw']['empty']=true;
// }
// if(strlen($pw)>16 || strlen($pw)<8){
//     $_SESSION['error']['pw']['len']=true;
// }

// $name=$_POST['name'];
accept('name');
length('name',1,8);

$birthday=$_POST['birthday'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
// $email=$_POST['email'];
accept('email');
email('email','email格式錯誤');

//欄位都檢查完畢
if(empty($_SESSION['err'])){
    $sql="insert,update,delete,select";
    // $pdo->exec($sql);
    echo "已提交";
}

header("location:index.php");


function accept($field,$msg='此欄位不得為空'){
    if(empty($_POST[$field])){
        $_SESSION['error'][$field]['empty']=$msg;
    }
}

function length($field,$min,$max,$msg='長度錯誤'){
    if(strlen($_POST[$field])>$max || strlen($_POST[$field])<$min){
        $_SESSION['error'][$field]['len']=$msg;
    }
}

function email($field,$msg){
    $email=$_POST[$field];
    if(mb_strpos($email,'@')==false){
        $_SESSION['error'][$field]['email']=$msg;
    }
}


?>