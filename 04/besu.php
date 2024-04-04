<?php
    $besu = 3; // 3의 배수를 판별하는 변수 
    $num = 11; // 3의 배수 여부를 판별

    if($num % $besu == 0){
        echo "$num : $besu"."의 배수이다."; // . 으로 문장 연결 가능 
    }
    else{
        echo "$num : $besu"."의 배수가 아닙니다.";
    }
?>