<?php
    // $input = 0;
    // error_reporting(E_ALL^ E_WARNING);
    // while($input_data<=10)
    // {
    //     echo "10보다 작거나 같아요".$input_data."<br>";
    //     $input_data++;
    // }
    // echo "10보다 커요".$input_data."<br>";
    

    // for($mux_count = 2; $mux_count <= 9; $mux_count++){
    //     echo "🔹".$mux_count."단 <br>";
    //     for($mux_num = 1; $mux_num <= 9; $mux_num++){
    //         echo $mux_count." X ".$mux_num." = ".$mux_count*$mux_num."&nbsp&nbsp";
    //     }
    //     echo "<br>";
    // }


    // $x = 1;
    // while($x<=5){
    //     echo "안녕하세요.<br>";
    //     $x++;
    // }


    //1~100까지 정수 합계를 구하시오
    // $x = 1;
    // $sum = 0;

    // while($x<=100){
    //     $sum += $x;
    //     $x++;
    // }

    // echo"합계: ".$sum;


    //1에서 100까지의 정수 중에서 5의 배수 합계를 구하시오
    // $x = 1;
    // $sum = 0;

    // while($x<=100){
    //     if($x%5==0)
    //         $sum += $x;
    //     $x++;
    // }
    // echo "5의 배수 합계: ".$sum;


    //while문으로 마일을 킬로미터로 변환하는 환산표를 만드시오
    // echo "---------------------------<br>";
    // echo "마일 킬로미터<br>";
    // echo "---------------------------<br>";

    // $mile = 10;
    // while($mile<=50){
    //     $km =  $mile*1.609344;
    //     $km = round($km, 2);
    //     echo $mile."&nbsp;".$km."<br>";
    //     $mile += 10;
    // }
    // echo "----------------------------";


    //1에서 10까지 정수 합계를 구하시오
    // $sum = 0;
    // for($i=1; $i<=10; $i++){
    //     $sum += $i;
    // }

    // echo "1에서 10까지의 합계: ".$sum;


    //1에서 100까지의 정수 중 3의 배수 합계를 구하시오
    // $sum = 0;
    // for($i=1; $i<=100; $i++){
    //     if($i%3==0)
    //         $sum += $i;
    // }

    // echo "1에서 100까지의 3의 배수 합계: ".$sum;


    //for문을 이용하여 섭씨 온도를 화씨 온도로 환산하는 표를 만드시오
    // echo "--------------------------<br>";
    // echo "섭씨 화씨<br>";
    // echo "--------------------------<br>";

    // for($c=-10; $c<=30; $c+=5){
    //     $f = ($c*9/5)+32;
    //     echo $c."&nbsp".$f."<br>";
    // }

    // echo "-----------------------------";


    //<table>태그를 이용해 섭씨/화씨 환산표를 만드시오
    // echo "<table border='1'>";
    // echo "<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    // for($c=-10; $c<=30; $c+=5){
    //     $f = ($c*9/5)+32;
    //     echo "<tr><th>$c</th><th>$f</th>";
    // }
    // echo "</table>"


    // $string="";

    // $string.="<table border='1'>";
    // $string.="<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    // for($c=-10; $c<=30; $c+=10){
    //     $f = ($c*9/5)+32;
    //     $string.= "<tr><th>$c</th><th>$f</th>";
    // }
    // $string.="</table>";

    // echo $string;


    //이중 for문
    // for($i=1; $i<=5; $i++){
    //     echo $i."행: ";
    //     for($j=1; $j<=10; $j++){
    //         echo $j." ";
    //     }
    //     echo "<br>";
    // }


    //for문 구구단
    // for($i=2; $i<=9; $i++){
    //     echo $i."단: ";
    //     for($j=1; $j<=9; $j++){
    //         $x = $i*$j;
    //         echo $i."X".$j."=".$x." ";
    //     }
    //     echo "<br>";
    // }


    //for문 구구단 표로 만들기
    // $string = "";
    // $string.="<table border='1'>";
    // for($i=2; $i<=9; $i++){
    //     $string.="<tr>";
    //     for($j=1; $j<=9; $j++){
    //         $x = $i*$j;
    //         $string.= "<td>".$i."X".$j."=".$x."</td>";
    //     }
    //     $string.="</tr>";
    // }
    // $string.="</table>";

    // echo $string;


    //숫자로 삼각형 모양 출력하기
    // for($i=1; $i<=9; $i++){
    //     for($j=1; $j<=$i; $j++){
    //         echo $i;
    //     }
    //     echo "<br>";
    // }


    //숫자로 역삼각형 모양 출력하기
    // for($i=9; $i>=1; $i--){
    //     for($j=1; $j<=$i; $j++){
    //         echo $i;
    //     }
    //     echo "<br>";
    // }


    //별표로 삼각형 만들기
    // for($i=1; $i<=9; $i++){
    //     for($j=1; $j<=9-$i; $j++){
    //         echo "&nbsp";
    //     }
    //     for($j=1; $j<=$i; $j++){
    //         echo "*";
    //     }
    //     echo "<br>";
    // }

?> 