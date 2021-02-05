<?php
    // 1ページに表示させるコメント数
    $num = 10;
    // MySQLへ接続
    $dsn = "mysql:host=localhost;dbname=tennis;charset=utf8";
    $user = "root";
    $password = "root"; //rootに指定したパスワード

    $page = 0;
    // ページがある時
    if(isset($_GET['page']) && $_GET['page'] > 0){
        $page = intval($_GET['page']) -1;
    }
    
    try{
        $db = new PDO($dsn, $user, $password); // $dsn , $user , $passwordをMySQLに接続
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // 属性を取得
        // プリペアドステートメントを作成
        $stmt = $db->prepare("
            SELECT * FROM bbs ORDER BY date DESC LIMIT :page, :num 
        "); //所得したカラムを降順で０〜１０件まで表示
        // パラメータ割り当て
        $page = $page * $num;

        $stmt->bindParam(':page', $page, PDO::PARAM_INT);
        $stmt->bindParam(':num', $num, PDO::PARAM_INT);
        $stmt->execute();
    }catch (PDOException $e){
        echo "エラー：" . $e->getMessage();
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交流サイト・掲示板</title>
</head>
<body>
    <h1>掲示板</h1>

    <p><a href="index.php"> トップページへ戻る </a></p>

    <form action="write.php" method="POST">
        
        <p>名前：<input type="text" name="name" value="<?php echo $_COOKIE['name']?>"></p>
        <p>タイトル<input type="text" name="title"></p>
        <textarea name=" body "></textarea>
        <p>削除パスワード（数字４桁）：<input type="text" name="pass"></p>
        <p><input type="submit" value="書き込む"></p>

    </form>
    </hr>

<?php
    while ($row = $stmt->fetch()): //fetchモードで$rowに格納する
        $title = $row['title'] ? $row['title'] : '(無題)'; //　条件式 ? 式１ : 式2 titleの有無を判別
?>

    <p>名前 <?php echo $row['name'] ?></p>　
    <p>タイトル <?php echo $title ?></p>
    <p><?php nl2br($row['body'] , false) ?></p>
    <p><?php echo $row['date'] ?></p>

<?php 
   endwhile;

        // ページ数の表示
    try{
        $stmt = $db->prepare("SELECT COUNT(*) FROM bbs"); // ()の文を実行する
        // クエリの実行
        $stmt->execute();
    }catch(PDOException $e){
        echo "エラー：" . $e->getMessage;
    }

    // コメントの件数を表示
    $comments = $stmt->fetchColumn();
    // ページ数を計算
    $max_page = ceil($comments / $num); //端数の切り上げ
    echo '<p>';
    for($i=0; $i <= $max_page; $i++){
        echo '<a href = "bbs.php?page=' . $i . '">' . $i . '</a>&nbsp;';
    }
    echo '</p>';
?>


   
</body>
</html>