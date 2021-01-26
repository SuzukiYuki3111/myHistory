<?php
    function divide($a , $b=0){

        if($b == 0){
            echo "0で割り切れません！" ;
        } else{
            echo $a / $b ;
        }

    }

    echo divide(7 , 2) ;
    echo "<br>" ;
    echo divide(9 , 0) ;