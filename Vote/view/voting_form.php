<html>

<head>
    <title>

    </title>
</head>
<body>
2017 차기 대선 후보는?
<form action="../controller/voting_update.php" method="post">
    <?php include "../model/DB.php";
    $db = new DB();
    $result = $db->select();
    foreach ($result as $value){
            ?>
    <input type="radio" name="candidate" value="<?php echo $value['name']?>"><?php echo $value['name']?><br>
            <?
    }
    ?>

    <input type="submit" value="제출">
</form>
<form action="../controller/candidate_insert.php" method="post">
    <input type="hidden" id='candidate' name="name">
    <input type="submit" value = "후보자 등록" onclick="document.getElementById('candidate').value = prompt('후보자의 이름은?')">
</form>

</body>
</html>