<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数練習用の電卓アプリ</title>
</head>
<body>
    <h1>電卓<br></h1>

    <form action="index.php" method="POST">

    <?php
    if(isset($_POST['result'])){
        
        $result = $_POST['result'] ;
        $button = $_POST['button'] ;
        $numA = $_POST['numA'] ;
        $numB = $_POST['numB'] ;
        
        switch($button){
            case ($button === "+"):
            $disp = $numA + $numB ;
            echo "<input type = 'text' value = '.$disp.'>" ;
            break ;

            case ($button === "-"):
            $disp = $numA - $numB ;
            echo "<input type = 'text' value = '.$disp.'>" ;
            break ;
        
            case ($button === "×"):
            $disp = $numA * $numB ;
            echo "<input type = 'text' value = '.$disp.'>" ;
            break ;

            case ($button === "÷"):
            $disp = $numA / $numB ;
            echo "<input type = 'text' value = '.$disp.'>" ;
            break ;
            
            
            }
    ?>

        <table>
            <tr>
                <td><input type="submit" name="" value="AC"></td>
                <td><input type="submit" name="" value="+/-"></td>
                <td><input type="submit" name="" value="%"></td>
                <td><input type="submit" name="button" value="÷"></td>
            </tr>
            <tr>
                <td><input type="submit" name="num" value="7"></td>
                <td><input type="submit" name="num" value="8"></td>
                <td><input type="submit" name="num" value="9"></td>
                <td><input type="submit" name="button" value="×"></td>
            </tr>
            <tr>
                <td><input type="submit" name="num" value="4"></td>
                <td><input type="submit" name="num" value="5"></td>
                <td><input type="submit" name="num" value="6"></td>
                <td><input type="submit" name="button" value="-"></td>
            </tr>
            <tr>
                <td><input type="submit" name="num" value="1"></td>
                <td><input type="submit" name="num" value="2"></td>
                <td><input type="submit" name="num" value="3"></td>
                <td><input type="submit" name="button" value="+"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="button" value="0"></td>
                <td><input type="submit" name="button" value="."></td>
                <td><input type="submit" name="result" value="="></td>
            </tr>
        </table>
    </form>
</body>
</html>