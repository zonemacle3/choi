<?php
    // 인치를 센치미터로 변환 
    // 인치 * 2.54 => 센치미터
    $inch = 10;

    # 테이블 생성

    echo "<table border = '1'>"; # 테두리 두께 
    echo "<tr align = 'center'>"; # 문자 가운데 정렬 
    echo "<td width ='100'>인치</td>
          <td width ='100'>센치미터</td>" ;
    echo "<tr>";
    
    while($inch <= 100)
    {
        $cm = $inch * 2.54;
        echo "<tr align = 'center'>
                <td>$inch</td>
                <td>$cm</td>
            </tr>";

            $inch += 10;
    }
    echo "</table>";

?>