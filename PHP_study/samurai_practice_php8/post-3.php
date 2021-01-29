<?php
    $tmp_star = intval($_POST['star']) ;
    $star = '' ;
    if($tmp_star<1 || $tmp_star>5){
        $star = '不正な値です' ;
    } else{
        for($i=0 ; $i<$tmp_star ; $i++){
            $star .= '★' ;
        }
        for(; $i<5 ; $i++){
            $star .= '☆' ;
        }
    }

