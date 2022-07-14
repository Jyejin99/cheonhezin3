<!DOCTYPE html>
<html>
    <head>
        <title>문제</title>
    </head>
    <body>
        <form method="POST" action="../test/practice3.php">
            <br><br>작은 숫자 <input type="text" name="small">
            큰 숫자 <input type="text" name="big">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    echo "<br><br><문제13><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];

    for($small; $small<=$big; ++$small){
        echo $small." ";
    }


    echo "<br><br><문제14><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];

    for($big; $big>=$small; --$big){
        echo $big." ";
    }


    echo "<br><br><문제15><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];

    for($small; $small<=$big; ++$small){
        if($small%2==0){
            echo $small." ";
        }
    }


    echo "<br><br><문제16><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];
    $sum = 0;

    for($small; $small<=$big; ++$small){
        $sum+=$small;
    }
    echo $sum." ";


    echo "<br><br><문제17><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];
    $sum = 0;

    for($small; $small<=$big; ++$small){
        if($small%2==0){
            $sum+=$small;
        }
    }
    echo $sum." ";


    echo "<br><br><문제18><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];
    $count = 0;

    for($small; $small<=$big; ++$small){
        ++$count;
    }
    echo $count;


    echo "<br><br><문제19><br>";

    $small = $_POST["small"];
    $big = $_POST["big"];
    $sum = 0;
    $count = 0;

    for($small; $small<=$big; ++$small){
        $sum+=$small;
        ++$count;
        $avg = $sum/$count;
    }
    echo $sum." ".sprintf('%0.1f',$avg);
?>