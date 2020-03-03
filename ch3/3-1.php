<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1.php 폼전송</title>
    <form action="3-2.php">
        아이디 : <input type="text" name="uid"/><br>
        비번 : <input type="text" name="pass"/><br>
        이름 : <input type="text" name="name"/><br>
        휴대폰 : <input type="text" name="hp"/><br>
        <input type="submit" value="전송"/>
    </form>

    <h4>직원등록</h4>
    <form action="3-3.php" method="post">
        <table border='1'>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="uid"></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>휴대폰</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr>
                <td>주소</td>
                <td>
                    <select name="pos">
                        <option>사원</option>
                        <option>대리</option>
                        <option>과장</option>
                        <option>차장</option>
                        <option>부장</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>부서</td>
                <td>
                    <select name="dep">
                        <option value="101">영업1부</option>
                        <option value="102">영업2부</option>
                        <option value="103">영업3부</option>
                        <option value="104">영업지원부</option>
                        <option value="105">인사부</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="등록하기"/>  
                </td>
            </tr>
        </table>
    </form>
</head>
<body>
    
</body>
</html>