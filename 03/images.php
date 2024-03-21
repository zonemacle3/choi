<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열과 html 태그 출력</title>
</head>
<body>
    <h3>고양이와 토끼</h3>
    <?php
        $filename = "cat.jpg";
        echo "<img src = '$filename'> "; // 파일변수명 = ' ' 작은 따음표
        echo "<br>";
        $filename1 = "rabit.jpg";
        echo "<img src = \"$filename1\">";
    ?>
</body>
</html>