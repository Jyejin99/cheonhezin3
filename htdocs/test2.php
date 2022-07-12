<?php
    $username = "Minho Jeon";
    echo $username;
    echo "<br>";
    $current_user = $username; 
    echo $current_user;

    echo "<br>";
    echo "<br>";

    //2차원 배열
    $oxo = array(array('x1', 'x2', 'x3'),
        array('y1', 'y2', 'y3'),
        array('z1', 'z2', 'z3')
    );
    echo $oxo[1][1];    //y2 출력
    echo "<br>";
    echo $oxo[2][1];    //z2 출력
?>

<!-- 폴더 안에 생성했을 경우 localhost를 열 때 경로를 적어준다.
-> localhost/test/test.php-->