<?php
    $msg=null ; //アップロード状況を表すメッセージ

    //アップロード処理
    if(isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])){
        $old_name = $_FILES['image']['tmp_name'] ;
        $new_name = date('YmdHits') ;
        $new_name .= mt_rand() ;
        switch(exif_imagetype($_FILES['image']['tmp_name'])){
            case IMAGETYPE_JPEG:
                $new_name .= '.jpeg' ;
                break ;

            case IMAGETYPE_GIF:
                $new_name .= '.gif' ;
                break ;
                
            case IMAGETYPE_PNG:
                $new_name .= '.png' ;
                break ;
                
            default:
            header('Location: upload.php') ;
            exit() ;    
        }
        if(move_uploaded_file($old_name, 'album/' .$new_name)){
            $msg = 'アップロードしました' ;
        } else{
            $msg = 'アップロードできませんでした' ;
        }
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
    <p><a href="index.php">トップページに戻る</a></p>
    
    <?php
        if($msg){
            echo '<p>' .$msg. '</p>' ;
        }
    ?>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="アップロード">
    </form> 
</body>
</html>