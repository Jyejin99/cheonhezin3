<!DOCTYPE html>
<html>
    <head>
        <title>문제3</title>
    </head>
    <body>
        <form method="POST" action="../test/test11.php">
            년도를 입력하시오 <input type="number" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
    $num = $_POST["num"];
    if($num%4==0){
        echo "윤년";
    }
    else{
        echo "평년";
    }
?>