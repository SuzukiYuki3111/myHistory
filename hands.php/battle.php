<?php
    // じゃんけんの手を配列化
    $hands = [ "グー" , "チョキ" , "パー" ] ;
    $playerHands = [ "グー" , "チョキ" , "パー" ] ;
    $pcHands = [ "グー" , "チョキ" , "パー" ] ;
    $results = [ "あいこ" , "勝ち" , "負け" ] ;
    //　プレイヤーの手が送信されたら
    if( isset( $_POST["playerHands"] ) ){
    //　プレイヤーの手を代入    
        $playerHands = $_POST["playerHands"] ;
    //　PCの手をランダムに選択    
        $key = array_rand( $hands ) ;
        $pcHands = $hands["$key"] ;
    //　$playerHandsが同じならあいこ、勝つ場合を考え、それ以外は負け    
        if ($playerHands === $pcHands){
            $results = "あいこ" ;
        } elseif ($playerHands === "グー" && $pcHands === "チョキ"){
            $results = "勝ち" ;
        } elseif ($playerHands === "チョキ" && $pcHands === "パー"){
            $results = "勝ち" ;
        } elseif ($playerHands === "パー" && $pcHands === "グー"){
            $results = "勝ち" ;
        } else {
            $results = "負け" ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h1>結果は・・・</h1>
    <p>
        <?php echo $results; ?>
    </p>    
        あなた : <?php echo $playerHands; ?> <br>
        PC     : <?php echo $pcHands; ?> <br>
    <p>
        <a class="red" href="index.php"> もう一回勝負する </a> 
    </p>
</body>
</html>