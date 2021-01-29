<?php
    $gender = $_POST['gender'] ;
    if($gender == 'man'){
        $gender = '男性' ;
    } else if($gender == 'woman'){
        $gender = '女性' ;
    } else{
        $gender = '不正な値です' ;
    } 