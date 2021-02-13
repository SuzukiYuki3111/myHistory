<?php
    // classの読み込み
    require "vending_machine-4.php" ;
    
    $vendor = new CupnoodleVendor() ;
    // お買いあげありがとうございます。
    echo $vendor -> buy(180)."<br>";

    echo "製造元：".$vendor -> showMaker()."<br>" ;