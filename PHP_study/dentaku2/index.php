<?php
    //　$a,$bの中身があった場合に計算する
    //  $ope = +,-,*,/,
    if( isset($_POST['numA']) && isset($_POST['numB']) ){
        $a = $_POST['numA'] ;
        $b = $_POST['numB'] ;
        $ope = $_POST['operation'] ;

        switch($ope){                   //四則演算
            
            case "+" :
            $result = $a + $b ;
            break;

            case "-" :
            $result = $a - $b ;
            break ;
            
            case "×" :
            $result = $a * $b ;
            break ;
            
            case "÷" :
            $result = $a / $b ;
            break ;
            default ; 
            break ;   
        }
        echo "結果：" .( $a .$ope .$b ."=" .$result ."<br>");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電卓練習</title>
</head>
<body>
    <h1>電卓練習だぞぉぉぉ</h1>

    <form action="" method="POST">
        <input type="text" name="numA">

        <select name="operation">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="×"> × </option>
            <option value="÷"> ÷ </option>
        </select>

        <input type="text" name="numB"> <br><br>

        <input type="submit" value="計算">
        <input type="reset" value="リセット">

    </form>
</body>
</html>