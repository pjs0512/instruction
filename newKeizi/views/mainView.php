<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr>
        <td>글번호</td>
        <td>제목</td>
        <td>작성자</td>
        <td>조회수</td>
        <td>작성일</td>
    </tr>
        <?php session_start(); for($i=0;$i<count($select);$i++){?>
        <tr>
            <td><?php echo $select[$i]["board_id"];?></td>
            <td onclick="location.replace('../controller/ContentsController.php?board_id=<?php echo $select[$i]['board_id']?>')"><?php echo $select[$i]["subject"];?></td>
            <td><?php echo $select[$i]["id"];?></td>
            <td><?php echo $select[$i]["hits"];?></td>
            <td><?php echo $select[$i]["reg_date"];?></td>
        </tr>
        <?php }?>
</table>
<?php if($_SESSION['login']){ ?>
    <input type="button" value="로그아웃" onclick="location.replace('../views/logOut.php')">
<?php } else{?>
    <input type="button" value="로그인" onclick="location.replace('../views/loginView.php')">
<?php } ?>
<?php if($_SESSION['login']){ ?>
    <input type="button" value="글쓰기" onclick="location.replace('../views/writeView.php')">
<?php } else{?>
    <input type="button" value="글쓰기" onclick="alert('권한이 없습니다.')">
<?php } ?>
    <input type="button" value="검색"><br>

</body>
</html>