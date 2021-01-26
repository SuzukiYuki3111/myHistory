<?php

function getInfoFromTextFile(string $filename, bool $isTitle) 
{
    $fp = fopen($filename, 'r');
    if ($fp) {
        $i = 0;
        while ($line = fgets($fp)) {
            if ($i === 0) {
                if ($isTitle) {
                    echo '<a href="../tennis/info/index.php">' . $line . '</a>';
                    break;
                } else {
                    echo '<h3>' . $line . '</h3>';
                }
            } else {
                echo $line . '<br>';
            }

            $i++;
        }
        fclose($fp);
    } else {
        echo 'お知らせはありません。';
    }
}

function modifyFileContents(string $filename, string $contents)
{
    return file_put_contents($filename, $contents);
}