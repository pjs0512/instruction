<?php session_start(); ?>
<html>
<head>

</head>
<body>
<form action="../controller/writeController.php" method="post">
    <p>제목</p>
        <input type="text" name="subject"><br><br>
    <p>내용</p>
        <textarea cols="50" rows="10" name="contents"></textarea><br><br>
        <input type="hidden" value="<?php echo $_SESSION['user_id']?>">
        <input type="submit" value="작성">
        <input type="button" value="취소">
</form>

</body>
</html>