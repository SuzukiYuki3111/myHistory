<pre>
<?php
    /**
     * 2020.12.14 キム 修正
     * キーの前後にスペースが入っていたので、
     * 修正しました。
     */
    $results = [
        "math" => 90 ,
        "english" => 90 ,
        "japanese" => 90 ,
    ] ;

    foreach ( $results as $title => $score ) {
        echo $title ." : " .$score ."<br>" ;
    }
?>
</pre>