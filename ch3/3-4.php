<?php
    require_once('./_dbConfig.php');
    //DB 접속
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    
    //쿼리 실행
    $rs =mysqli_query($conn, "SELECT * FROM `MEMBER`");

    //DB 종료
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-4</title>
</head>
<body>
    <h3>직원목록</h3>
    <table border="1">
        <tr>
            <th>아이디</th>
            <th>이름</th>
            <th>휴대폰</th>
            <th>직급</th>
            <th>부서</th>
            <th>입사일</th>
            <th>관리<th>
        </tr>
        <? while($row = mysqli_fetch_array($rs)) { ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td><?= $row['pos'] ?></td>
            <td><?= $row['dep'] ?></td>
            <td><?= substr($row['rdate'],2,9) ?></td>
            <td>
                <a href="">수정</a>
                <a href="">삭제</a>
            </td>
        </tr>
        <?}?>
    </table>
</body>
</html>