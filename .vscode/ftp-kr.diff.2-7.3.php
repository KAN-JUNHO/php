<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-7</title>
</head>
<body>
    <h3>7.php 문자열</h3>
    <?php
        // 문자열 배열
        $str1 = "Hello PHP";

        echo "\$str1[0] : $str1[0] <br />";
        echo "\$str1[2] : $str1[2] <br />";
        echo "\$str1[6] : $str1[6] <br />";
        echo "\$str1[7] : $str1[7] <br />";

        // 문자열 이스케이프
        $str2 = "Hello \"PHP\"";
        echo "\$str2 : $str2<br />";


        // 문자열 결합
        $s1 = 'Hello';
        $s2 = ' PHP';

        $r1 = $s1.$s2;
        $r2 = "$s1$s2";
        $r3 = "{$s1}{$s2}";        

        echo '$r1 : '.$r1.'<br />';
        echo '$r2 : '.$r2.'<br />';
        echo '$r3 : '.$r3.'<br />';        
 
        // 문자열 함수
        $str3 = 'Hello PHP';

        $rs1 = strlen($str3);
        $rs2 = substr($str3, 0, 2);
        $rs3 = substr($str3, 6, 9);
        $rs4 = strstr($str3, 'e');
        $rs5 = strpos($str3, 'l');
        $rs6 = str_replace('PHP', 'JAVA', $str3);
        $rs7 = trim($str3);

        echo("\$rs1 : $rs1<br />");
        echo("\$rs2 : $rs2<br />");
        echo("\$rs3 : $rs3<br />");
        echo("\$rs4 : $rs4<br />");
        echo("\$rs5 : $rs5<br />");
        echo("\$rs6 : $rs6<br />");
        echo("\$rs7 : $rs7<br />");
        
        // 문자열 특수함수
        $str4 = "Hello\n PHP\n";

        echo "$str4";

    
    ?>


    
</body>
</html>