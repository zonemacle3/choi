<?php
    # while
    $i = 1;
    $sum = 0;
    
    # 조건(반복) 
    while ($i <= 10) {
        // echo "$i <br>";
        # 증감식
        $sum += $i;
        echo "\$i : $i -> 합계 : $sum <br>"; 
        $i++;
    }
    
?>