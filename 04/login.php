<?php
    $level = 8;
    
    if ($level >0 && $level <= 7){
        echo "회원 레벨 : $level <br>";
        echo "로그인 가능합니다!";
    }
    else{
        echo "로그인이 가능하지 않습니다.";
    }
?>