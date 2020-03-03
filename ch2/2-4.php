<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-4</title>
</head>
<body>
    <h3>4.php 반복문</h3>

    <h4>for</h4>
    <?php
        $sum = 0;
        for($k=1 ; $k<=10 ; $k++){
            $sum += $k;    
        }

        echo "<p>1부터 10까지 합 : $sum</p>";

    ?>
    <h4>구구단</h4>
    <table border ="1">
        <tr>
            <th>1단</th>
            <th>2단</th>
            <th>3단</th>
            <th>4단</th>
            <th>5단</th>
            <th>6단</th>
            <th>7단</th>
            <th>8단</th>
            <th>9단</th>
        </tr>   
        <td>
            <?for($a=2 ; $a<=9 ;$a++){?>
                <tr>
                <?for($b=1 ; $b<=9 ; $b++){?>
                    <td><?= $b ?> x <?= $a ?> = <?= $b * $a ?></td>
                <?}?>
                </tr>
            <?}?>
        
        <td>
    </table>

    <h4>while</h4>

    <?php
        while(true){
            if($num % 7 ==0 && $num %9 ==0){
            break;
            }
            $num++;
        }
    ?>
    
    <p>7과 9의 최소 공배수 : <?= num ?></p>

    <h4>break,continue</h4>
    <?php
        $tot  = 0;
        for($i=1 ; $i<=10 ; i++){
            if($i % 2 !=0){
                continue;
            }

            $tot += $i;
        }
        echo('<p> 1부터 10까지 짝수합 : '.$tot.'</p>');
    ?>
</body>
</html>