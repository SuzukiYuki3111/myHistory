<?php
    require 'vending_machine.php' ;
    $vendor = new vendingMachine() ;
    echo $vendor -> buy(180) ;