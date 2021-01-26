<?php
    include '../include/function.php' ;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        file_put_contents('./info2.txt', $_POST['contents']) ;
        // header('Location: /samurai_practice_php7/tennis/index.php') ;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テニスサークル・ファイル操作練習</title>
</head>
<body>
    <h1>テニスサークル交流サイト</h1>
    <p><a href="../index.php">トップページへ戻る</a></p>
    <h2>お知らせ修正</h2>
    
    <form action="/samurai_practice_php7/tennis/info/update.php" method="POST">
        内容<br>
        <textarea name="contents" rows="10" cols="30">
            <?php echo file_get_contents('./info2.txt') ; ?>
        </textarea>
           <br><br>
        <input type="submit" value="修正">
    </form> 
</body>
</html>