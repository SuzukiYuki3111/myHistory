<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="style.css">
</head>
<body>
    
    <h1>
        練習用じゃんけん
    </h1>
    <span>
        出す手を選んで勝負しましょう。
    </span>
    <div class="form">
        <form action="battle.php" method="POST">
            <label>
                <input type="radio" name="playerHands" value="グー" required>　グー    
            </label>
            <label>
                <input type="radio" name="playerHands" value="チョキ">　チョキ
            </label>
            <label>
                <input type="radio" name="playerHands" value="パー">　パー <br>
            </label>
            <button type=submit value=battleButton> 勝負する！！</button>    
        </form>    
    </div>   
</body>
</html>