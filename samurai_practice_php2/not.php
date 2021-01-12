<?php
    $true = TRUE;   //まず変数にTRUE、FALSEをそれぞれ代入しておく
    $false = FALSE;

    $a = !$true;    //trueの否定なのでFALSE
    $b = !$false;   //falseの否定なのでTRUE
    $c = !$true && !$true ;   //trueの否定の論理和なのでFALSE
    $d = !($true && $true);     //trueの論理和の否定なのでFALSE
    var_dump($a, $b, $c, $d,);