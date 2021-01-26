<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    file_put_contents('./info2.txt', $_POST['contents']) ;
    header('Location: /samurai_practice_php7/tennis/index.php') ;
}