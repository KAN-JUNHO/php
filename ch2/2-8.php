<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2-8</title>
</head>
<body>
    <h3>8.php include</h3>
    <?php
        include("./inc/header.php");
        include "./inc/header.php";
    ?>

    <h1>메인</h1>
    <?
        include_once "./inc/footer.php";
        include_once "./inc/footer.php";
    ?>
</body>
</html>