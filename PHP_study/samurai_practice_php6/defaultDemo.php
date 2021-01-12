<?php
    /** function 関数名(引数 , 引数・・・){
     *      関数の処理
     * }
     *      返り値がない場合、returnを省略できる。
     */

     function default_demo($name = "太郎"){
         echo "私の名前は" .$name ."です。<br>" ;
     }

     default_demo() ;
     default_demo("花子") ;
