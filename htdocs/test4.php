<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="../test/test4.php">
            이름 : <input type="text" name="name"/>
            성 : <input type="text" name="f_name"/>
            <br>
            전화번호 뒷자리 : <input type="number" name="number"/>
            전화번호 앞자리 : <input type="number" name="f_number"/>
            <input type="submit" name="submit"/>
        </form>
        <?php
            error_reporting(E_ALL^ E_WARNING);  //에러 문구 없애줌
            $name = $_POST["f_name"];
            $name .= $_POST["name"];
            echo "<br>이름: ".$name."<br>";

            $number = $_POST["f_number"];
            $number .= $_POST["number"];
            echo "전화번호: 010".$number."<br>";
        ?>
    </body>
</html>

