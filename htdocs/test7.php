<?php
    function test1($num1, $num2){
        static $num3=1;
        $result = $num1 + $num2 + $num3;
        $num3++;
        return $result;
    }
    global $val;
    $val = test1(3,4);
    echo "$val<br>";
    $val = test1(3,4);
    echo "$val<br>";
    $val = test1(3,4);
    echo "$val<br>";
    $val = test1(3,4);
    echo "$val<br>";
?>

<!--static: 변수는 함수에서 호출된 뒤에 값이 사라지지만 static을 이용하면 유지됨-->