<?php
    $name = $_POST['name'] ;    //お名前
    $gender = $_POST['gender'] ;    //性別
    if($gender == "man"){
        $gender = "男性" ;
    } else if($gender == "woman"){
        $gender = "女性" ;
    }

    $tmp_star = $_POST['star'] ;
    $star = '' ;    //出力用
    for($i=0; $i<$tmp_star ; $i++){
        $star .= '★' ; //送信されたぶんだけ★を追加
    }
    for(; $i<5; $i++){
        $star .= '☆' ; //「5‐送信された数字」だけ追加
    }
    
    $other = $_POST['other'] ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
</head>
<body>
    <h1>アンケート結果</h1>
    <p>お名前：<?php echo $name ; ?></p>
    <p>性別：<?php echo $gender ; ?></p>
    <p>評価：<?php echo $star ; ?></p>
    <p>ご意見：<?php echo nl2br($other, false) ; ?></p>
</body>
</html>