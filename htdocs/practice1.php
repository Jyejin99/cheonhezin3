<!DOCTYPE html>
<html>
    <head>
        <title>문제</title>
    </head>
    <body>
        <form method="POST" action="../test/practice1.php">
            숫자를 입력하시오 <input type="text" name="num">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    echo "<br> <문제1> <br>";

    $num = $_POST["num"];
    for($start=1; $start<=$num; ++$start){
        echo $start." ";
    }


    echo "<br><br><문제2><br>";

    $num = $_POST["num"];
    for($start=1; $start<=$num; $start++){
        if($start==1 or $start%3==0){
            echo $start." ";
        }
    }


    echo "<br><br><문제3><br>";

    $num = $_POST["num"];
    for($start=1; $start<=$num; $start++){
        if($start==1 or $start%5==0){
            echo $start." ";
        }
    }


    echo "<br><br><문제4><br>";

    $num = $_POST["num"];
    for($start=1; $start<=$num; $start++){
        if($start==1 or $start%3==0 or $start%5==0){
            echo $start." ";
        }
    }


    echo "<br><br><문제5><br>";

    $num = $_POST["num"];
    for($start=1; $start<=$num; $start++){
        if($start%3!=0){
            echo $start." ";
        }
    }


    echo "<br><br><문제6><br>";

    $num = $_POST["num"];
    for($start=1; $start<=$num; $start++){
        if($start%3==0){
            echo "X ";
        }
        else{
            echo $start." ";
        }
    }


    echo "<br><br><문제7><br>";

    $num = $_POST["num"];
    $sum = 0;

    for($start=1; $start<=$num; $start++){
        $sum += $start;
    }
    echo $sum;


    echo "<br><br><문제8><br>";

    $num = $_POST["num"];
    $sum = 0;

    for($start=1; $start<=$num; $start++){
        if($start%5==0){
            $sum += $start;
        }
    }
    echo $sum;


    echo "<br><br><문제9><br>";

    $num = $_POST["num"];
    $sum = 0;

    for($start=1; $start<=$num; $start++){
        if($start%3==0 or $start%5==0){
            $sum += $start;
        }
    }
    echo $sum;

    echo "<br><br><문제10><br>";

    $num = $_POST["num"];
    $sum = 0;
    $count = 0;

    for($start=1; $start<=$num; $start++){
        if($start%3==0 or $start%5==0){
            $sum += $start;
            $count++;
        }
    }
    $avg = $sum/$count;
    echo $sum." ".round($avg,5);
?>
