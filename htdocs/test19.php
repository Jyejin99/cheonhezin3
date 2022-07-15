<?php
    echo "<br><br> --연습문제1-- <br><br>";

    function triangle($h, $w){
        $result = $h*$w/2;

        return $result;
    }
    $h = 10;
    $w = 12;
    $sum = triangle($h, $w);
    echo "삼각형의 너비: ".$w."cm <br>";
    echo "삼각형의 높이: ".$h."cm <br>";
    echo "삼각형의 넓이: ".$sum."cm2<br><br>";

    echo "<br><br> --연습문제2-- <br><br>";

    function sum_num($a, $b){
        $sum=0;
        for($a; $a<=$b; $a++){
            $sum += $a;
        }
        return $sum;
    }
    $a = 10;
    $b = 50;
    $result = sum_num($a, $b);
    echo $a."에서 ".$b."까지의 정수 합계: ".$result;

    echo "<br><br> --연습문제3-- <br><br>";

    function sum_num2($n){
        $sum=0;
        for($i=1; $i<=100; $i++){
            if($i%$n==0){
                $sum += $i;
            }
        }
        return $sum;
    }
    $n = 5;
    $result = sum_num2($n);
    echo $n."정수 중 5의 배수의 합계: ".$result;

    echo "<br><br> --연습문제4-- <br><br>";

    error_reporting(E_ALL^ E_WARNING);
    function ticket($age){
        if($age>18 and $age<65){
            $cost = 9000;
        }
        else{
            $cost = 7000;
        }
        return $cost;
    }
    function ticket2($age){
        if($age>18 and $age<65){
            $cost = 13000;
        }
        elseif($age<=18){
            $cost = 10000;
        }
        elseif($age>=65){
            $cost = 7000;
        }
        return $cost;
    }

    $category=2;
    $age=20;
    
    if ($category==1){
        $money=ticket($age);
    }
    else{
        $money=ticket2($age);
    }

    if ($category==1){
        $cat="조조";
    }
    else{
        $cat="일반";
    }

    echo "구분: ".$cat."<br>";
    echo "나이: ".$age."<br>";
    echo "입장료는 ".$money."원 입니다.";
?>