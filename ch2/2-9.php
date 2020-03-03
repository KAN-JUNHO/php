<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-9</title>
</head>
<body>
    <h3>9.쿠키</h3>

    <?php
        $uid = 'abcd';
        $pass = '1234';

        setcookie('uid',$uid);
        setcookie('pass',$pass);
    ?>
    <h4>쿠키 생성완료</h4>
    <a href="./2-10.php">쿠키 전송</a>
    
</body>
</html>