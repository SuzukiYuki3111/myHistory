<!DOCTYPE html>
<?php
    include "./include/function.php" ; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テニスサークル交流サイト</title>
</head>
<body>
    <!-- 1.webアプリケーション企画　=> 想定ユーザー(エンドユーザー)を定める
    　　  2.機能の洗い出し => 最低限の機能を考える
        　3.ディレクトリマップ作成 => ページの動きを考える、モックアップ作成
        　4.使用技術を考える => やれる範囲からではなくて、どのようにしたいかを考える
        -->
        <h1>テニスサークル交流サイト</h1>
        <h2>
            お知らせ
            <a href = "../tennis/info/modify.php" style="font-size: small; font-weight: normal;">お知らせ修正</a>    
        </h2>
        <?php
            getInfoFromTextFile('./info/info2.txt', true) ;
        ?>     

</body>
</html>