<?php
    //function 関数名(引数 , 引数・・・){
    //    関数の処理
    //    return 返り値
    // }

    function getPrice($price){
        $price = $price * 1.08 ;
        return $price ;
    }

    echo getPrice(300) ;