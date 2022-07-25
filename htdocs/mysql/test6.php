<?php
    $servername = "localhost";
    $username = "yjin";                 // 사용자명
    $password = "1234";                // 비밀번호
    $dbname = "practice";                 // DB명

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //$sql에 num필드가 1인 레코드의 name을 변경하는 명령 저장
    $sql = "update friend set name = '김길동' where num =1;";
    $result = mysqli_query($conn, $sql);

    if($result)
        echo "수정 완료!";
    else
        echo "수정 오류: ".mysqli_error($conn);

    mysqli_close($conn);
?>