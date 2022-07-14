<!DOCTYPE html>
<html>
    <head>
        <title>문제</title>
    </head>
    <body>
        <form method="POST" action="../test/practice2.php">
            <br><br>10개의 숫자를 입력하시오. <input type="text" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    echo "<br><문제11><br>";

    $num = $_POST["num"];
    $num = explode(" ",$num);
    $sum = 0;
    $count = 0;

    for($i=0; $i<10; ++$i){
        $sum+=$num[$i];
    }
    echo $sum;


    echo "<br><br><문제12><br>";

    $num = $_POST["num"];
    $num = explode(" ",$num);
    $sum = 0;
    $count = 0;

    for($i=0; $i<10; ++$i){
        if($num[$i]%2==0){
            ++$count;
        }
    }
    echo $count;
?>