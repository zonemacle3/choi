<h3>구구단 표</h3>
<table border="1">
    <?php
    // 2단부터 9단까지 반복
    for ($a = 2; $a <= 9; $a++) {
        echo "<tr>";
        echo "<td>$a.단</td>";
        // 1부터 9까지 반복
        for ($b = 1; $b <= 9; $b++) {
            $c = $a * $b;
            echo "<td align='center'>$a x $b = $c</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
