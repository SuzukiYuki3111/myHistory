<?php
    // 簡易的にブログの投稿日を設定する
    // mktimeという機能を使い、2014年2月10日　15時30分00秒　の日時を作る。
    $blog = mktime(15, 30, 0, 2, 10, 2014);
    
    // 1日（86400秒以内ならNEW!!を表示する）
    if ( $blog >= time() - 86400){
        echo "NEW!!";
    }