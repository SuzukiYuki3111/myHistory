<?php
    function vending_machine($price , $juiceName){
        if ($price >= 120){
            return $juiceName ."のお買い上げいただきありがとうございます。<br>" ;
        } else {
            return $juiceName ."の金額が不足しております・・・<br>" ;
        }
    }