<?php
    //연습문제1
    echo "<br>문제1<br>";
    $score = 9;
    
    if($score<=100 and $score>=90){
        echo "수";
    }
    elseif($score<=89 and $score>=80){
        echo "우";
    }
    elseif($score<=79 and $score>=70){
        echo "미";
    }
    elseif($score<=69 and $score>=60){
        echo "양";
    }
    elseif($score<=59 and $score>=0){
        echo "가";
    }
    else{
        echo "입력 점수 오류!";
    }



    //연습문제2
    echo "<br><br>문제2";
    $num=100;
    while($num<=200){
        if($num%2==1)
            echo $num."&nbsp";
            if($num%20==0)
                echo "<br>";
        $num++;
    }


    //연습문제3
    echo "<br><br>문제3";
    for($num=100; $num<=200; $num++){
        if($num%2==1)
            echo $num."&nbsp";
            if($num%20==0)
                echo "<br>";
    }


    //연습문제4
    echo "<br><br>문제4<br>";
    $num=1;
    $count=1;
    while($num<=100){
        if($num%3==0)
            if($count%10==0)
                echo $num."<br>";
            else
                echo $num." ";
        ++$num;
        ++$count;
    }

    
    //연습문제5
    echo "<br><br>문제5<br>";
    $count=0;
    for($num=300; $num<=350; ++$num){
        if($num%5!=0){
            $count++;
            if($count%10==0)
                echo $num."<br>";
            else
                echo $num." ";
        }
    }


    //연습문제6
    echo "<br><br>문제6<br>";
    echo "-------------------<br>";
    echo "인치 센티미터<br>";
    echo "-------------------<br>";

    $inch=10;
    $senti = '';
    while($inch<=20){
        $senti=$inch*2.54;
        echo $inch."&nbsp&nbsp".$senti."<br>";
        $inch+=2;
    }

    echo "----------------------";


    //연습문제7
    echo "<br><br>문제7<br>";
    echo "-------------------<br>";
    echo "인치 센티미터<br>";
    echo "-------------------<br>";

    for($inch=10; $inch<=20; $inch+=2){
        $senti=$inch*2.54;
        echo $inch."&nbsp&nbsp".$senti."<br>";
    }
    echo "----------------------";


    //연습문제8
    echo "<br><br>문제8<br>";
    echo "-------------------<br>";
    echo "달러 원화 유로<br>";
    echo "-------------------<br>";

    for($dollar=10; $dollar<=20; $dollar+=2){
        $won = $dollar*1180.60;
        $euro = $dollar*1350.30;
        echo $dollar."&nbsp&nbsp".$won."&nbsp&nbsp".$euro."<br>";
    }
    echo "----------------------";


    //연습문제9
    echo "<br><br>문제9";
    echo "<table border='1'>";
    echo "<tr><th width='100'>달러</th><th width='100'>원화</th><th width='100'>유로</th>";

    for($dollar=10; $dollar<=20; $dollar+=2){
        $won = $dollar*1180.60;
        $euro = $dollar*1350.30;
        echo "<tr><th>$dollar</th><th>$won</th><th>$euro</th><br>";
    }

    echo "</table>";


    //연습문제10
    echo "<br><br>문제10<br>";
    for($low=1; $low<=5; ++$low){
        for($height=1; $height<=10; ++$height){
            echo "* ";
        }
        echo "<br>";
    }


    //연습문제11
    echo "<br><br>문제11<br>";
    for($low=1; $low<=10; ++$low){
        for($height=1; $height<=$low; ++$height){
            echo "* ";
        }
        echo "<br>";
    }
?>