<?php

$users = [
    ['acc' => 'mack', 'pw' => '1234', 'type' => 'vip'],
    ['acc' => 'claire', 'pw' => '8555', 'type' => 'member'],
    ['acc' => 'emily', 'pw' => '6666', 'type' => 'vip']
];

if (!empty($_POST['acc']) && !empty($_POST['pw'])) {
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $chk=' ';

    foreach ($users as $user) {
        if ($user['acc']==$acc) {
            $chk=$user;
        }
    }

    if (!empty($chk)) {
        if ($chk['pw']==$pw) {
            switch($chk['type']){
                case 'vip':
                    header("location:vip.php?name={$chk['acc']}");
                    break;
                case 'member':
                    header("location:member.php?name={$chk['acc']}");
                    break;
            }
        } else {
            header("location:error.php?e=2");
        }
    } else {
        header("location:error.php?e=1");
    }
} else {

    header("location:login.html");
}
?>