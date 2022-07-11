<?php
    $mycounter = 1;
    $mystring = "Hello";
    $myarray = array("one", "two", "three");

    echo $mystring;
    echo "$mycounter<br>";
    echo "$mystring<br>";     //Hello 출력
    echo "$myarray[1]<br>";   //배열 두 번째인 two 출력
    echo '$myarray[0]';       //$myarray[0] 출력
    //큰 따옴표로 묶으면 변수는 변수로 인식
    //작은 따옴표로 묶으면 변수는 변수가 아닌 문자로 인식
?>