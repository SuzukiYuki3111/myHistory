<?php
    // メールを送信できるようにする
    mb_language("japanese");
    mb_internal_encoding("utf-8");
    $text=$_POST['text'];
    $mail=$_POST['mail'];

    if(mb_send_mail('yukicourage3111@gmail.com','',$text,$mail)){
        echo "メールを送信致しました。";
    } else{
        echo "メールを送信できませんでした。入力していない部分があります。";
    }
?>
