<?php
    $true = TRUE;   //まず変数にTRUE、FALSEをそれぞれ代入しておく
    $false = FALSE;

    $a = $true || $true;    //両方trueなのでTRUE
    $b = $true || $false;   //片方がfalseなのでTRUE
    $c = $true || $true || $true;   //一度に複数の演算ができる、TRUE
    $d = $true || $false || $false;     //TRUE
    $e = $true || ($true || $false);    //TRUE
    $f = $false || $false;              //FALSE
    var_dump($a, $b, $c, $d, $e, $f);