<?php
    require "vending_machine-3.php" ;
    $vendor = new vendingMachine() ;
    // お買い上げありがとうございます。
    echo $vendor -> buy(180) ."<br>";
    // 製造元を見るメソッド
    echo $vendor -> showMaker() ."<br>" ;
    // makerはpublicなプロパティなので直接見ることができる
    echo $vendor -> maker . "<br>" ;