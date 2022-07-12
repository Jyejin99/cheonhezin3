<!DOCTYPE html>
<html>
    <head>
        <title>문제4</title>
    </head>
    <body>
        <form method="POST" action="../test/test13.php">
            월을 입력하시오 <input type="number" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
    $num = $_POST["num"];
    switch($num){
        case 2:
            echo "28";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "30";
            break;
        default:
            echo "31";
            break;
    }
?>