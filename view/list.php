<html>

<head>

</head>
<body>
<table border="1">
    <tr>
        <td>회원 번호</td>
        <td>유저 아이디</td>
        <td>직업</td>
        <td>이름</td>
        <td>성</td>
        <td>비밀번호</td>
        <td>핸드폰</td>
        <td>이메일</td>
    </tr>
    <?php session_start();
    for($i = 0; $i< count($select);$i++){?>
        <tr>
            <td><?php echo $select[$i]['sysid']; ?></td>
            <td><?php echo $select[$i]['userid']; ?></td>
            <td><?php echo $select[$i]['classification']; ?></td>
            <td><?php echo $select[$i]['name']; ?></td>
            <td><?php echo $select[$i]['gender']; ?></td>
            <td><?php echo $select[$i]['password']; ?></td>
            <td><?php echo $select[$i]['phone']; ?></td>
            <td><?php echo $select[$i]['email']; ?></td>
        </tr>
    <?php } ?>
</table>
    <form action="../controller/listController.php" method="post">
        <input type="submit" name="leftAllArrow" value="<<">
        <input type="submit" name="leftArrow" value="<">
    <?php
        for($i=$_SESSION['page']-2; $i<$_SESSION['page']+3;$i++){
            if($i>0){
                if($_SESSION['lastPage'] >= $i){
                    if($_SESSION['page'] == $i){
                        echo "<input type='submit' name ='page' value='$i' style='color:red'>";
                    }else{
                        echo "<input type='submit' name ='page' value='$i'>";
                    }
                }

            }
        }
    ?>
        <input type="submit" name="rightAllArrow" value=">">
        <input type="submit" name="rightArrow" value=">>">
    </form>
<input type="button" value="메인으로" onclick="location.replace('../view/main.php')">


</body>
</html>