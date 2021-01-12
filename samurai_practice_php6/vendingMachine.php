<?php
    /** 引数は「金額」と「ジュースの名前」
     *  120円以上なら、「お買い上げありがとうございます。」
     *  120円未満なら、「金額が不足しております・・・」
     */

     echo vending_machine(120 , "オレンジジュース") ;

    $price = 90 ;
    $juiceName = "アップルジュース " ;

    echo vending_machine($price , $juiceName) ;

    function vending_machine($price , $juiceName) {
        if( $price >= 120) {
            return $juiceName ."のお買い上げありがとうございます。<br>" ;
        } else {
            return $juiceName ."の金額が不足しております・・・<br>" ; 
        }
    }