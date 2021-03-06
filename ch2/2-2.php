<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-2</title>
</head>
<body>
    <h3>2.php 연산자</h3>
    
    <h4>산술연산자</h4>
    <?php
        $num1 = 1;
        $num2 = 2;
        $num3 = 3;
        $num4 = 4;

        $rs1 = $num1 + $num2;
        $rs2 = $num1 - $num2;
        $rs3 = $num1 * $num2;
        $rs4 = $num1 / $num2;
        $rs4 = $num1 % $num2;

        $num1++;
        $num2--;

    ?>

    <ul>
        <li>$rs1 : <?= $rs1 ?></li>
        <li>$rs2 : <?= $rs2 ?></li>
        <li>$rs3 : <?= $rs3 ?></li>
        <li>$rs4 : <?= $rs4 ?></li>
        <li>$rs5 : <?= $rs5 ?></li>
        <li>$num1 : <?= $num1 ?></li>
        <li>$num2 : <?= $num2 ?></li>
    </ul>

    <h4>복합대입연산자</h4>
    <?php
        $var1 = 1;
        $var2 = 2;
        $var3 = 3;
        $var4 = 4;
        $var5 = '오렌지';

        $var1 += 1;
        $var2 -= 2;
        $var3 *= 3;
        $var4 /= 4;
        $var5 .= '주스';

        echo "<ul>
                <!-- 문자열 이스케이프 처리 (php 변수를 문자열로 그대로 출력)-->
                <li>\$var1 : $var1</li>
                <li>\$var2 : $var2</li>
                <li>\$var3 : $var3</li>
                <li>\$var4 : $var4</li>
                <li>\$var5 : $var5</li>
                </ul>";
    ?>
    

    <h4>비교연산자</h4>
    <?php
        $v1 = 1;
        $v2 = 2;

        $res1 = ($v1 > $v2);
        $res2 = ($v1 < $v2);
        $res3 = ($v1 >= $v2);
        $res4 = ($v1 <= $v2);
        $res5 = ($v1 == $v2);
        $res6 = ($v1 != $v2);

        echo "<ul>";
        echo "<li>\$res1 : $res1</li>";
        echo ("<li>\$res2 : $res2</li>");
        echo ("<li>\$res3 : $res3</li>");
        echo "<li>\$res4 : $res4</li>";
        echo "<li>\$res5 : $res5</li>";
        echo "<li>\$res6 : $res6</li>";
        echo "</ul>";
    ?>
    <h4>논리연산자</h4>

    <?php
        $data1 = 1;
        $data2 = 2;
        $data3 = 3;
        $data4 = 4;

        $result1 = ($data1 > 0 && $data2 > 1);
        $result2 = ($data1 > 1 && $data2 > 2);
        $result3 = ($data2 > 1 || $data3 < 2);
        $result4 = ($data2 > 1 || $data3 < 2);
        $result5 = !($data1>$data2);
    ?>
    <ul>
        <li>$result1 : <?= $result1 ?></li>
        <li>$result2 : <?= $result2 ?></li>
        <li>$result3 : <?= $result3 ?></li>
        <li>$result4 : <?= $result4 ?></li>
        <li>$result5 : <?= $result5 ?></li>
    </ul>
    
</body>
</html>