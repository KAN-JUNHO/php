<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>6.php 배열</h3>
    <h4>배열생성</h4>

    <?php
        $score = array(60,68,72,82,78);
        $sum = 0;

        for($i = 0; $i<=count($score); $i++){
            $sum += $score[$i];
        }

        echo "<p>배열 score의 합 : $sum</p>";

        //순서대로 배열생성
        $eng[] = 80;
        $eng[] = 82;
        $eng[] = 70;
        $eng[] = 78;
        $eng[] = 92;

        $engSum = 0;

        foreach($eng as $e){
            $engSum += $e;
        }

    ?>

    <h4>연관배열</h4>
    
    <?php
        $num = array(
            'a'=> 86,
             'b'=>92,
             'c'=>82,
             'd'=>72,
             'e'=>62
            );
        echo "\$sum['a'] : {$num['a']}<br />";
        echo "\$sum['b'] : {$num['b']}<br />";
        echo "\$sum['c'] : {$num['c']}<br />";
        echo "\$sum['d'] : {$num['d']}<br />";
        echo "\$sum['e'] : {$num['e']}<br />";

        // 직접생성
        $country['kor'] = '서울';
        $country['usa'] = '미국';
        $country['jpn'] = '도쿄';
        $country['chi'] = '베이징';

        foreach($country as $k => $v){
            echo "$k => $v <br />";
        }
    ?>

</body>
</html>