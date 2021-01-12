<?php
    date_default_timezone_set('Asia/Tokyo'); 
    $hour = date("H");

    if ( $hour <= 12 ){             //12時より前
        echo "おはよう";
    } else if ( $hour <= 18 ){      //18時より前
        echo "こんにちは";
    } else{                         //18時以降
        echo "こんばんは";
    }