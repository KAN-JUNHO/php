<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-7</title>
</head>
<body>
    <h3>7.php 문자열</h3>
    <?php
        //문자열 배열
        $str1 = "Hello PHP";

        echo "\$str1[0] : $str1[0] <br />";
        echo "\$str1[2] : $str1[2] <br />";
        echo "\$str1[6] : $str1[6] <br />";
        echo "\$str1[7] : $str1[7] <br />";

        //문자열 이스케이프
        $str2 = "Hello \"PHP\"";

        echo "\$str2 : $str2<br />";

        //문자열 결합
        $s1 = 'Hello';
        $s2 = 'PHP';

        $r1 = $s1$s2;
        $r2 = "$s1$s2";
        $r3 = "{$s1}{$s2}";
        $r4 = $s1.$s2;

        echo '$r1 : '.$r1.'<br />;
        
        //문자열 함수

        //문자열 특수함수

    ?>


</body>
</html>