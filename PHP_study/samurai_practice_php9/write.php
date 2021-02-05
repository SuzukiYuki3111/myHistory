<?php
    // データの受け取り
    $name = $_POST["name"] ;
    $title = $_POST["title"] ;
    $body = $_POST["body"] ;
    $pass = $_POST["pass"] ;

    // もし名前とbodyが空だったらbbs.phpへ移動
    if($name === "" || $body === ""){
        header ('Location: bbs.php') ;
        exit() ;
    }
    // もしパスワードが４桁の数字じゃなかったらbbs.phpへ移動
    if(!preg_match("/^[0-9]{4}$/" , $pass)){
        header ('Location: bbs.php') ;
        exit() ;
    }
    // (cookieの名前、保存する値、タイムスタンプ)
    setcookie('name',$name,time()+60*60*24*30) ;
    // MySQLへ接続する
    $dsn = "mysql: host = localhost , dbname = tennis , charset = utf8" ; //USEと同じ
    $user = "root" ;
    $password = "root" ;

    try{
        $db = new PDO($dsn , $user , $password) ;
        $db -> setAttribute(PDO:: ATTR_EMULATE_PREPARES , false) ;
        // プリペアドステートメントを作成
        $stmt = $db -> prepare("
            INSERT INTO bbs (name , title , body , date , pass)
            VALUES(:name :title :body now(), :pass)") ;
        // パラメータを割り当て
        $stmt -> bindParam(':name' , $name , PDO::PARAM_STR) ;
        $stmt -> bindParam(':title' , $title , PDO::PARAM_STR) ;
        $stmt -> bindParam(':body' , $body , PDO::PARAM_STR) ;
        $stmt -> bindParam(':pass' , $pass , PDO::PARAM_STR) ;
        // クエリの実行
        $stmt -> execute() ;
        // bbs.phpに戻る
        header("Location: bbs.php") ;
        exit() ;
    } catch(PDOException $e){
        die ('エラー：' . $e -> getMassage()) ;
    }