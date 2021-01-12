<?php
    /** 1.「おみくじを引く」ボタンを押したら
     *     大吉、中吉、小吉、凶、大凶からランダムに選択される。
     * 
     *  2. 結果を表示する。
     * 
     *  3. 引き直しを出来るようにする。
     */

    $lottery =[ "大吉" , "中吉" , "小吉" , "凶" , "大凶" ] ;
    $key =array_rand( $lottery ) ;
    $results = $lottery["$key"] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじ</title>
</head>
    <body>
        <header>
            2021新年運試し！
        </header>
        <main>
            <h1>結果は・・・</h1>
            <p> <?php echo $results; ?></p> <br>
            <p> <a href="index.php"> >>もう一回引き直す </a></p>
        </main>
        <footer>
            SuzukiYuki Practice
        </footer>
    </body>
</html>