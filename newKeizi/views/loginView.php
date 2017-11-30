<html>
<head>

</head>
<body>
<form action="../controller/loginController.php" method="post">
    아이디 : <input type="text" name="id"><br>
    비밀번호 : <input type="text" name="pw"><br>
    <input type="submit" value="로그인">
    <input type="button" value="취소" onclick="location.replace('../controller/mainController.php')">
</form>

</body>
</html>