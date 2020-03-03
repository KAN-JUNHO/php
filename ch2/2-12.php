<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-12</title>
</head>
<body>
    <h3>12.세션확인</h3>
    <?php
        session_start();

        $name = $_SESSION['name'];
        $pass = $_SESSION['pass'];
    ?>

    <p>
        이름 : <?= $name ?><br>
        비번 : <?= $pass ?><br>
    </p>
</body>
</html>