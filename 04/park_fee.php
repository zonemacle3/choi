<?php
    $age = 90;
    $welfare = "no"; // 복지카드 소지여부 
    $youkong = "yes"; // 국가유공자증 소지여부  
    $after = "yes"; // 17시 이후 출입여부  

    // 입장료 관련 할인 여부
    if ($age < 3) {
        $fee = "무료"; // 3세 미만 무료
    }
    else if (($age >= 3 and $age <= 13 ) || ($after == "yes")) {
        $fee = "4000원";
    }
    else if (($age >= 14 and $age <= 18) || ($age >= 70) || ($welfare == "yes")
            || ($youkong == "yes")) {
        $fee = "8000원";
    }
    else{
        $fee = "10000원";
    }

    echo "복지 카드 소지 : $welfare <br>";
    echo "국가유공자증 소지 : $youkong <br>";
    echo "17시 이후 입장 : $after <br>";
    echo "나이 : $age 세 <br><br>";
    echo "입장료 : $fee";

?>