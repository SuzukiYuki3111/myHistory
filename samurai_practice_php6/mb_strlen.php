<?php
    // mb_strlen => 文字の長さを確認する

    $count = mb_strlen("こんにちは") ;

    $greeting = "こんにちは" ;

    $count = mb_strlen($greeting) ;

    var_dump($count) ;