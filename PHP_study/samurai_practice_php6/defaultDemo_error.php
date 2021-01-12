<?php
    function default_demo($name = "太郎" , $age){
        echo "私の名前は" .$name ."です。年齢は" .$age ."です。" ;
    }

    default_demo(20) ;

    /** この場合、$ageが値を持っていない為nullとなる。
     * 値を持っていない場合は、$nameより前に書かなければならない。