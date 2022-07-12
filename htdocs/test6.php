<?php
    //숫자에서 문자열로 자동 변환
    $number = 12345 + 67890;
    echo substr($number, 3, 1);
    echo"<br>";

    //문자열에서 숫자로의 자동 변환
    $pi = "3.1415927";
    $radius = 5;
    echo $pi * ($radius * $radius);
    echo"<br>";

    function longdate($timestamp)
    {
        return date("l F js Y", $timestamp);
    }
    function today($today)
    {   
        $today=strtotime("+1 week");
        return date("Y-m-d", $today);
    }

    echo longdate(time());
    echo "<br>";
    echo today(time());
?>

<!--https://offbyone.tistory.com/38-->