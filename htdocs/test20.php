<?php
    /*------------trim함수------------*/
    $str = " Hello ";
    echo "trim() 함수를 사용하지 않고 출력<br>";
    echo "|".$str."|";

    echo "<br><br/>";
    echo "trim() 함수를 사용하고 출력<br/>";
    echo "|".trim($str)."|";

    echo "<br><br/>";

    $str = "Hello World";
    echo "원문<br/>";
    echo $str;
    echo "<br/><br/>";
    

    /*------------strtoupper와 strtolower함수------------*/
    echo "대문자로 출력<br/>";
    echo strtoupper($str);
    echo "<br/><br/>";

    echo "소문자로 출력<br/>";
    echo strtolower($str);
    echo "<br/><br/>";


    /*------------count와 strlen함수------------*/
    $food = array('fruits' => array('orange', 'banana', 'apple'), 'veggie' => array('carrot', 'collard', 'pea'));

    //재귀 count 수
    echo count($food, COUNT_RECURSIVE);
    //결과: 8
    echo "<br/><br/>";
    //보통 count 수
    echo count($food);
    //결과: 2;

    
    /*------------str_replace와 substr함수------------*/
    echo "<br/><br/>";
    $str = "Hello World";
    $change_word = str_replace("World", "PHP World", $str);
    echo $change_word;

    echo "<br/><br/>";

    $fileName = "background.jpg";
    $execute = substr($fileName, -4, 4);
    if($execute == '.jpg' || $execute == '.pnh' || $execute == '.bmp' || $execute == '.gif'){
        echo "업로드한 파일은 이미지 파일입니다.<br/>";
    }
    else{
        echo "업로드한 파일은 이미지 파일이 아닙니다.<br/>";
    }


    /*------------explode와 substr함수------------*/
    $email = "j1004me@naver.com";
    $email_Array = explode("@", $email);
    echo "<pre>"; //시스템에 미리 지정된 고정폭 글꼴을 사용하여 표현
    var_dump($email_Array);//배열의 모든 요소를 출력

    echo "이메일 호스트 출력<br/>";
    echo $email_Array[1];


    /*------------시간함수------------*/
    echo "<br/><br/>";

    $start_Time = mktime(9,00,00,07,19,2022);
    $end_Time = mkTime(18,10,00,07,19,2022);
    //Mktime(시,분,초,월,일,년)

    if($start_Time <= time() && $end_Time > time()){
        echo "현재시간은 ".date("Y년 m월 d일 i시 s분")."입니다.";
        echo "<br/>";
        echo "수강신청까지 앞으로 하루 남았습니다";
    }
    else{
        echo "현재시간은 ".date("Y년 m월 d일 i시 s분")."입니다.";
        echo "<br/>";
        echo "수강신청이 끝났습니다.";
    }
    echo "<br/>";
?>