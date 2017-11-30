<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>사용자 등록</title>
</head>
<body>

<!--사용자 입력 -->
<form action="../controller/registerController.php" method="POST">
    <b>사용자 정보 등록</b><br>
    <ol>
        <li>사용자 ID: <input type="text" name="user_id"></li>
        <li>이름: <input type="text" name="username"></li>
        <li>암호: <input type="text" name="userpassword"></li>
        <li>구분: <select name="classification">
                    <option value="staff" >교직원</option>
                    <option value="student" selected>학생</option>
                    </select></li>
        <li>성별: <select name="gender">
                    <option value="male">남성</option>
                    <option value="female" selected>여성</option>
                    </select></li>
        <li>전화번호: <input type="text" name="phone"></li>
        <li>이메일: <input type="text" name="email"></li>
    </ol>
    <input type="submit" value="등록하기">
</form>
</body>
</html>