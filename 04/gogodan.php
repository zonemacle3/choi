<h3>2단 구구단표 만들기</h3>
<table border = "1" width = "100">
<?php
    $a = 2;
    $b = 1;
    
    while ($b <= 9) {
        $c = $a * $b;

        #테이블 생성
        echo "<tr>
                <td align = 'center'> $a x $b = $c </td>
             </tr>";
        $b++;
    }
?>
</table>


<h3>구구단 표</h3>
<table border = "1">
<?php
    for ($a=2;$a<=9;$a++){
        for($b=1;$b<=9;$b++) {
            $c = $a * $b;

            #테이블 생성
            if($b %9 == 0){
                echo "<tr>
                <td align = 'center'> $a x $b = $c </td>
                </tr>";}
            else {
            echo "<tr>
                 <td align = 'center'> $a x $b = $c </td>
                 </tr>";
                }
             }

            }
?>
</table>
