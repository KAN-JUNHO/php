<meta charset = "utf-8"/>
<?php
    //파라미터 수신
    $uid = $_REQUEST['uid'];
    $pass = $_REQUEST['pass'];
    $name = $_REQUEST['name'];
    $hp = $_REQUEST['hp'];
?>

<p>
    아이디 : <?= $uid ?><br>
    비번 : <?= $pass ?><br>  
    이름 : <?= $name ?><br>
    휴대폰 : <?= $hp ?><br>
<p>
