<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-5</title>
</head>
<body>
    <h3>5.php 함수</h3>
    <?php
        // 외부파일 추가
        require_once('./lib/calc.php');

        // 함수정의
        function f($x, $y){
            $z = 2*$x * $y;
            return $z;
        }
        
        //함수호출
        $rs1 = f(1,2);
        $rs2 = f(2,3);
        $rs3 = f(3,4);
        $rs4 = f(4,5);

        echo("<p>\$rs1 : $rs1</p>");
        echo("<p>\$rs2 : $rs2</p>");
        echo"<p>\$rs3 : $rs3</p>";
        echo"<p>\$rs4 : {$rs4}</p>";
    ?>

    <h4>라이브러리 함수</h4>
    <ul>
        <li>plus(1,2) : <?= plus(1,2) ?></li>
        <li>minus(1,2) : <?= minus(1,2) ?></li>
        <li>multi(1,2) : <?= multi(1,2) ?></li>
        <li>div(1,2) : <?= div(1,2) ?></li>
    </ul>

    <h4>지역변수, 전역변수<h4>
    <?php
        // 전역변수
        $num1 = 1;
        $num2 = 2;

        function add() {

            global $num1, $num2;
            
            $result = $num1 + $num2;

            return $result;
        }

        $res = add();

        echo "<p>\$res : $res</p>";
    ?>

    <h4>php 내장함수</h4>
    <?php

        $r1 = ceil(1.3);
        $r2 = floor(1.3);
        $r3 = round(1.3);
        $r4 = round(1.3);
        $r5 = rand();
        $r6 = rand(1,10);
        $r7 = date('Y');
        $r8 = date('y');
        $r9 = date('m');
        $r10 = date('d');
        $r11 = date('H');
        $r12 = date('h');
        $r13 = date('i');
        $r14 = date('s');
        $r15 = date('Y-m-d H:i:s');

        echo "r1 : $r1<br />";
        echo "r2 : $r2<br />";
        echo "r3 : $r3<br />";
        echo "r4 : $r4<br />";
        echo "r5 : $r5<br />";
        echo "r6 : $r6<br />";
        echo "r7 : $r7<br />";
        echo "r8 : $r8<br />";
        echo "r9 : $r9<br />";
        echo "r10 : $r10<br />";
        echo "r11 : $r11<br />";
        echo "r12 : $r12<br />";
        echo "r13 : $r13<br />";
        echo "r14 : $r14<br />";
        echo "r15 : $r15<br />";
    ?>
</body>
</html>