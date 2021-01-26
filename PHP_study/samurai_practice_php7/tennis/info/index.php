<!DOCTYPE html>
<?php
    include '../include/function.php' ;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テニスサークル交流サイト</title>
</head>
<body>
    <h1>テニスサークル交流サイト</h1>
    <p><a href="../index.php">トップページへ戻る</a></p>
    <h2>お知らせ</h2>
    <?php
        getInfoFromTextFile('info2.txt', false) ;
    ?>
</body>
</html>