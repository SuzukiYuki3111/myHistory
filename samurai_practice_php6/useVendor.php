<?php
    include 'vendor.php' ; // vendor.phpの式を引用する。

    echo vending_machine(120 , "オレンジジュース") ;

    $price = 90 ;
    $juiceName = "アップルジュース" ;

    echo vending_machine($price , $juiceName) ;