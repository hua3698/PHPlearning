<?php 
    session_start();

    function errFeedBack($field){
        if(!empty($_SESSION['err'][$field])){
            foreach($_SESSION['err'][$field] as $err){
                echo $err;
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料檢查</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
    <form action="check.php" method="post" class="text-center">
        <ul class="list-group col-md-6 mx-auto">
            <li class="list-group-item">*帳號：<input type="text" name='acc'><br>
                <?php errFeedBack('acc'); ?>
            </li>

            <li class="list-group-item">*密碼：<input type="password" name='pw'><br>
                    <?php
                    
                    if(!empty($_SESSION['err']['pw'])){
                        foreach($_SESSION['err']['pw'] as $err){
                            echo $err;
                        }
                    }
                    ?>
            </li>


            <li class="list-group-item">姓名：<input type="text" name='name'><br>
                <?php if(!empty($_SESSION['error']) && isset($_SESSION['error']['name'])){; ?>
                <span style="color: red; font-size:12px;">姓名欄位不得為空</span>
                <?php }; ?>
                <?php if(!empty($_SESSION['error']) && isset($_SESSION['error']['name']['len'])){; ?>
                <span style="color: red; font-size:12px;">姓名欄位必須在8~16位數之間</span>
                <?php }; ?>
            </li>

            <li class="list-group-item">生日：<input type="date" name='birthday'></li>
            <li class="list-group-item">地址：<input type="text" name='addr'></li>
            <li class="list-group-item">電話：<input type="text" name='tel'></li>
            <li class="list-group-item">Email：<input type="text" name='email'></li>
        </ul>
        <div class="mx-auto my-2">
            <input type="submit" class="btn btn-sm btn-primary" value="送出">
            <input type="reset" class="btn btn-sm btn-secondary" value="重置">
        </div>
    </form>
    </div>
</body>
</html>