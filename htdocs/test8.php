<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method = "POST" action="../test/test8.php">
            비밀번호를 입력하세요. <input type="password" name="password">
            <input type="submit" name="submit">
            <br>
        </form>
    </body>
</html>
<?php
    $password= $_POST["password"];
    if(strlen($password)<=8){
        echo "나쁨";
    }
    else{
        echo "설정되었습니다";
    }

?>