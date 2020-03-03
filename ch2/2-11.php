<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-11</title>
</head>
<body>
    <h3>11.세션</h3>
    <?php
        session_start();

        $_SESSION['name']='홍길동';
        $_SESSION['pass']='12345';

    ?>

    <h4>세션 저장완료</h4>
    <a href="2-12.php">세션값확인</a>
</body>
</html>