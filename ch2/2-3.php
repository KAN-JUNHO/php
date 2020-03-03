<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-3</title>
</head>
<body>
    <h3>3.php 조건문</h3>

    <h4>if<h4>
    <?php
        $num1 = 1;
        if($num1 < 2){
            echo "<p>num1은 2보다 작다.</p>";
        }
        
        if($num1 > 0){
    ?>
        <p>$num1은 0보다 크다.</p>
    <? } ?>

    <h4>if~else<h4>
    <?php
        $num2 = 2;
        
        if($num2 > $num1){
            echo('<p>$num2는 $num1보다 크다.</p>');
        }else{
            echo('<p>$num2는 $num1보다 작다.</p>');
        }
    ?>

    <h4>if~else if~else<h4>
    <?php
        $score = 86;

        if($score >=90 && $score <=100){
    ?>
        <p>A입니다</p>
    <? }else if($score >=80 && $score <90){ ?>
        <p>B입니다</p>

    <? }else if($score >=90 && $score <80){ ?>
        <p>C입니다</p>

    <? }else if($score >=60 && $score <70){ ?>
        <p>D입니다</p>

    <? }else{ ?>
        <p>F입니다</p>

    <? } ?>

    <h4>switch<h4>
    <?php
        $animal = '사자';

        switch($animal){
            case '호랑이':
                echo "<p>호랑이 입니다.</p>";
                break;
            case '사자':
                echo "<p>사자 입니다.</p>";
                break;
            case '코끼리':
                echo "<p>코끼리 입니다.</p>";
                break;
            default:
                echo "<p>없습니다.</p>";
                break;
        }
    ?>
</body>
</html>