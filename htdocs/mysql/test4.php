<?php
    $servername = "localhost";
    $username = "yjin";                 // 사용자명
    $password = "1234";                // 비밀번호
    $dbname = "practice";                 // DB명
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // $sql에 '윤채린'의 이름, 전화번호 검색 명령 저장
    $sql = "select name, tel from friend where name='윤채린';";    

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
        
    echo $row["name"]."의 전화번호 : ". $row["tel"]."<br>";

    mysqli_close($conn);
?>