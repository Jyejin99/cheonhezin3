<!DOCTYPE html>
<html>
    <head>
        <title>문제</title>
    </head>
    <body>
        <form method="POST" action="../test/practice4.php">
            단을 입력하시오 <input type="text" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    echo "<br><br><문제20><br>";

    $num = $_POST["num"];

    for($start=1; $start<=9; ++$start){
        echo $num." * ".$start." = ".$num*$start."<br>";
    }
?>