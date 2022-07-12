<!DOCTYPE html>
<html>
    <head>
        <title>문제2</title>
    </head>
    <body>
        <form method="POST" action="../test/test10.php">
            정수를 입력하시오 <input type="number" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
    $num = $_POST["num"];
    switch($num){
        case 0:
            echo "zero";
            break;
        case $num<0:
            echo "minus";
            break;
        case $num>0:
            echo "plus";
            break;
    }
?>