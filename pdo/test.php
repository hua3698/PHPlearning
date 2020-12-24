<?php

if(!empty($_POST['dept']) || !empty('$_POST'['school'])){
    $dept = "";
    if(!empty($_POST['dept'])){
        $result = " AND `dept`= '{$_POST['dept']}'";
    }

    $school = "";
    if (!empty($_POST['school'])) {
        $result = " AND `graduate_at` = '{$_POST['school']}'";
    }

    if(!empty($_POST['dept']) && !empty('$_POST'['school'])){
        $result =" AND `dept`= '{$_POST['dept']}' AND `graduate_at` = '{$_POST['school']}'";
    }
}

    $sql = "select 
    `students`.`school_num` AS '學號',
    `students`.`name` AS '姓名',
    `students`.`uni_id` AS'身分證字號',
    `students`.`birthday` AS '生日',
    `dept`.`name` AS '科系',
    `graduate_school`.`name` AS '畢業國中'

  from 
    `students`,
    `dept`,
    `graduate_school` 

  where
    `dept`.`id`=`students`.`dept` AND 
    `students`.`graduate_at`=`graduate_school`.`id` $result";

?>


    ------------------
老師寫法

<?php
    $dept = "";

    if (!empty($_POST['dept'])) {
        $dept = " AND `dept`= '{$_POST['dept']}'";
    }

    $school = "";

    if (!empty($_POST['school'])) {
        $school = " AND `graduate_at` = '{$_POST['school']}'";
    }
    $sql = "select 
    `students`.`school_num` AS '學號',
    `students`.`name` AS '姓名',
    `students`.`uni_id` AS'身分證字號',
    `students`.`birthday` AS '生日',
    `dept`.`name` AS '科系',
    `graduate_school`.`name` AS '畢業國中'

  from 
    `students`,
    `dept`,
    `graduate_school` 

  where
    `dept`.`id`=`students`.`dept` AND 
    `students`.`graduate_at`=`graduate_school`.`id` $dept $school";

    ?>
