<?php
    $images = [] ;  //画像ファイル名のリストを格納する配列
    $num = 5 ;  //１ページに表示する画像の枚数

    // 画像フォルダから画像ファイル名を読み込む
    if($handle = opendir('./album')){
        while($entry = readdir($handle)){
            //「.」および「..」でないとき、ファイル名を配列に追加
            if($entry != '.' && $entry != '..'){
                $images[] = $entry ;
            }
        }
        closedir($handle) ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交流サイト：画像アップロード</title>
</head>
<body>
    <h1>交流サイト：画像アップロード</h1>
    <p>
        <a href="index.php">トップページに戻る</a>
        <a href="upload.php">写真をアップロードする</a>
    </p>
    
    <?php
        if(count($images) > 0){
            
            $images = array_chunk($images, $num) ;

            $page = 0 ;

            if(isset($_GET['page']) && is_numeric($_GET['page'])){
                $page = intval($_GET['page']) - 1 ;
                if(!isset($images[$page])){
                    $page = 0 ;
                }
            }

            //画像の表示
            foreach($images[$page] as $img){
                echo '<img scr=" ./album /'. $img .'">' ;
            }
            echo '<p>' ;
            for($i=1 ; $i <= count($images) ; $i++){
                echo '<a href="album.php?page=' .$i.'">' .$i .'</a>&nbsp ;' ;
            }
            echo '</p>' ;
        } else{
            echo '<p>画像はまだありません</p>' ;
        }
    ?>

</body>
</html>