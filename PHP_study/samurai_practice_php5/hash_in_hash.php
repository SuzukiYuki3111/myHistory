<pre>
<?php
    /**
     * 2020.12.14 キム 修正
     * キーの前後にスペースが入っていたので、
     * 修正しました。
     */
    $result = [ "math" => 90  , "english" => 80  ] ;

    $friends =  [ 
        "はるき" => $result ,
    ] ;

    var_dump( $friends ) ;

    $friends[ "かおる" ] = [ "math" => 95 , "english" => 85 ] ;

    var_dump( $friends ) ;
?>
</pre>