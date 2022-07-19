<?php
    /*숫자열 관련 함수*/
    echo "-------절대값 구하기------<br>";
    echo abs(8)."<br>";
    echo abs(-8)."<br>";
    echo abs(5.3)."<br>";
    echo abs(-5.3)."<br>";

    echo "<br><br>";


    echo "----올림,내림,반올림 값 구하기----<br>";
    echo ceil(3.2)."<br>";  //올림
    echo ceil(3.7)."<br>";

    echo floor(3.2)."<br>"; //내림
    echo floor(3.7)."<br>";

    echo round(3.2)."<br>"; //반올림
    echo round(3.7)."<br>";

    echo "<br><br>";


    echo "----제곱근, 거듭제곱 값 구하기----<br>";
    echo sqrt(25)."<br>"; //제곱근
    echo sqrt(2)."<br>";

    echo pow(2, 3)."<br>";  //거듭제곱
    echo pow(3, 4)."<br>";

    echo "<br><br>";


    echo "----랜덤 수 발생시키기----<br>";
    echo rand(1,6)."<br>";
    echo rand(1,6)."<br>";
    echo rand(1,6)."<br>";

    echo "<br><br>";


    echo "-------16진수 변환하기-------<br>";
    echo dechex(255)."<br>";    //10진수 -> 16진수
    echo dechex(128)."<br>";

    echo hexdec("ff")."<br>";   //16진수 -> 10진수
    echo hexdec("80")."<br>";

    echo "<br><br>";


    /*문자열 관련 함수*/
    echo "----htmlspecialchars()----<br>";
    $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
    echo $str;

    $str2 = htmlspecialchars($str); //특정 문자를 HTML 특수 문자로 변환
    echo $str2;

    echo "<br><br>";

    $str = "&lt;h3&gt;MySQL은 PHP와 같이 많이 사용된다.&lt;/h3&gt;";
    echo $str."<br>";

    $str2 = htmlspecialchars_decode($str);  //HTML 특수 문자를 특정 문자로 복호화
    echo $str2;

    echo "<br><br>";


    echo "----문자열 분리하여 배열로 전환하기----<br>";
    $tel = "010-1234-5678";
    $arr = explode("-", $tel);  //문자열을 쪼개어 배열에 저장

    $tel2 = $arr[0].$arr[1].$arr[2];
    echo $tel2;

    echo "<br><br>";


    echo "----배열 요소 합쳐서 문자열 만들기----<br>";
    $arr = array("010", "1234", "5678");
    $tel = join("-", $arr);     //배열 요소를 합쳐서 문자열로 저장

    echo $tel;

    echo "<br><br>";


    echo "----특정 포맷으로 출력하기----<br>";
    $name="홍길동";
    $age = 20;

    printf("%s님의나이는 %d살 입니다.",$name, $age);

    echo "<br><br>";


    echo "----특정 포맷으로 변환하기----<br>";
    $tel = "2022-10-30";
    $tel2 = str_replace("-","/",$tel);  //문자열을 특정 문자열로 변환 (치환할 문자/대체할 문자/대상 문장)
    echo $tel2."<br>";

    $str="안녕하세요.\n반갑습니다";
    $str2 = str_replace("\n","<br>",$str); 

    echo $str2;

    echo "<br><br>";


    echo "----알파벳 대소문자 변경하기----<br>";
    $str = "PHP is fun!";

    echo strtoupper($str)."<br>";   //대문자로 변경
    echo strtolower($str);          //소문자로 변경

    echo "<br><br>";


    echo "----특정 문자열 분리하기----<br>";
    $str = "2022-03-25 21:30:50";

    $year = substr($str, 0, 4);
    $month = substr($str, 5, 2);
    $day = substr($str, 8, 2);
    $time = substr($str, 11);

    echo $year."년<br>";
    echo $month."월<br>";
    echo $day."일<br>";
    echo $time;
    
    echo "<br><br>";

    
    echo "----문자열 길이 구하기----<br>";
    $str = "PHP is fun!";
    echo strlen($str)."<br>";

    $str2 = "거북이";
    echo strlen($str2); //한글자는 3바이트

    echo "<br><br>";

    
    /*배열 관련 함수*/
    echo "----배열 요소 개수 구하기----<br>";
    $animal = array("사자","호랑이","사슴","여우");
    $length = count($animal);

    echo "요소의 개수: ".$length;

    echo "<br><br>";

    
    echo "----배열에 요소 추가하기----<br>";
    $animal = array("사자","호랑이","사슴","여우");

    array_push($animal, "팽귄");    //요소 추가
    array_push($animal, "코뿔소");
    print_r($animal);

    echo "<br><br>";


    echo "----배열에 요소 삭제하기----<br>";
    $animal = array("사자","호랑이","사슴","여우");

    array_pop($animal); //제일 뒤에 있는 요소 삭제
    print_r($animal);

    echo "<br><br>";


    echo "----배열에 요소 정렬하기----<br>";
    $animal = array("사자","호랑이","사슴","여우");

    sort($animal); //오름차순 정렬(내림차순은 rsort())
    print_r($animal);
    
    echo "<br><br>";


    echo "----배열에 요소 정렬하기----<br>";
    $score = array(93,85,93,77,100);

    $sum = array_sum($score);
    $avg = $sum/count($score);

    echo "합계: ".$sum."<br>";
    echo "평균: ".$avg;

    
    echo "<br><br>";

    /*날짜,시간 관련 함수*/
    echo "---특정 포맷으로 일시 표시하기----<br>";
    $today = date("Y년 m월 d일");
    echo "오늘은 ".$today."입니다.<br>";

    echo date("Y-m-d")."<br>";
    echo date("Y.m.d")."<br>";
    echo date("Y-m-d H:i:s")."<br>";

    echo "<br><br>";


    echo "---일시 타임스템프로 표시하기----<br>";
    $timestamp = time();
    echo "현재 시간 타임스태프 : ".$timestamp."<br>";

    echo "현재 시간: ".date("Y-m-d H:i:s", $timestamp);

    echo "<br><br>";


    echo "---일시 타임스템프로 표시하기----<br>";
    $current_time = time();

    $time_diff = 2*24*60*60;
    $before_1day = $current_time - $time_diff;
    $after_1day = $current_time + $time_diff;

    echo "현재 타임스탬프: ".$current_time."<br>";
    echo "현재 시간: ".date("Y-m-d H:i:s", $current_time)."<br>";
    echo "------------------------------------<br>";

    echo "2일 전 타임스탬프: ".$before_1day."<br>";
    echo "2일 전 시간: ".date("Y-m-d H:i:s", $before_1day)."<br>";
    echo "------------------------------------<br>";
    
    echo "2일 후 타임스탬프: ".$after_1day."<br>";
    echo "2일 후 시간: ".date("Y-m-d H:i:s", $after_1day)."<br>";
    echo "------------------------------------<br>";

    echo "<br><br>";

    /*파일 관련 함수*/
    echo "---텍스트 파일 읽기----<br>";
    $file = fopen("../txt/hello.txt","r");

    while(!feof($file)){    //파일 내용 끝까지 도달했는지 확인
        echo fgets($file)."<br>";   //한줄씩 반환
    }
    fclose($file);

    echo "<br><br>";


    echo "---텍스트 파일 읽기----<br>";
    $file = fopen("../txt/data.csv","r");
    $header = fgetcsv($file);
    $num = count($header);
    echo "<h3>5명 학생의 ".$num."과목 합계/평균 구하기</h3>";

    while(!feof($file)){
        $sum = 0;
        $line = fgetcsv($file);
        foreach($line as $v){
            $sum += $v;
        }
        $avg = round($sum/3,2);
        echo "합계: ".$sum.", 평균: ".$avg."<br>";
    }

    fclose($file);

    echo "<br><br>";


    echo "---텍스트 파일 쓰기----<br>";
    $file = fopen("../txt/hello2.txt","w");

    $str = "만나서 반갑습니다.";
    fwrite($file, $str);

    echo "파일쓰기 완료!";
    fclose($file);
?>