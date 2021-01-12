<?php
    $i = 0;
    if ( $i == 0 ) {
        echo "iは0に等しい";
    } else if ( $i == 1 ){
        echo "iは1に等しい";
    } else {
        echo "iは0と1のどちらでもない";
    }

    switch ($i) {
        case 0:                         //case,defaultにはコロン : を使う
            echo "iは0に等しい";        //breakは「終わりにする」の意味
        break;
        case 2:
            echo "iは1に等しい";
        break;
        default:
            echo "iは0と1のどちらでもない";
    break;
    }