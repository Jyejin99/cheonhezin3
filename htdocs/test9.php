<!DOCTYPE html>
<html>
    <head>
        <title>문제1</title>
    </head>
    <body>
        <h1>데이터의 입력</h1>
        <form method="POST" action="../test/test9.php">
            큰 숫자 : <input type="number" name="num1">
            <br>
            작은 숫자 : <input type="number" name="num2">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $result=$num1-$num2;
    echo $result;
?>