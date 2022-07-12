<!DOCTYPE html>
<html>
    <head>
        <title>문제4</title>
    </head>
    <body>
        <form method="POST" action="../test/test12.php">
            번호를 입력하시오(1,2,3) <input type="number" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
    $num = $_POST["num"];
    switch($num){
        case 1:
            echo "dog";
            break;
        case 2:
            echo "cat";
            break;
        case 3:
            echo "chick";
            break;      
        default:
            echo "I don't know";
            break;
    }
?>