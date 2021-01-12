<pre>
<?php
    /**
     * 2020.12.14 キム 修正
     * インデントを揃えました。
     */
    $result = [
        "japanese" => 80 ,
        "math" => 80 ,
        "sciense" => 80 ,
        "history" => 80 ,
        "english" => 80 ,
    ] ;

    var_dump( $result ) ;
    // 数学の点数を上書き
    $result [ "math" ] = 85 ;
    var_dump( $result ) ;
    // 音楽の点数を追加    
    $result [ "music" ] = 90 ;
    var_dump( $result ) ;

?>
</pre>