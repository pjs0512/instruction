<?php
include '../model/DB.php';
$regi = array();
$regi['thisId'] = $_POST['thisID'];
$regi['user_id'] = $_POST['user_id'];
$regi['userpassword']  = $_POST['userpassword'];
$regi['username']  =$_POST['username'];
$regi['classification']  = $_POST['classification'];
$regi['gender']  = $_POST['gender'];
$regi['phone']  = $_POST['phone'];
$regi['email']  = $_POST['email'];

$errorCode = false;

foreach ($regi as $key =>$value){
    if($value == null){
        $errorCode = true;
    }
}

if($errorCode){?>
    <script>
        alert('아래 항목은 필수 항목 입니다.');
        location.replace('../view/modify.php');
    </script>
<?php }
else {
    $db = new DB();

    if($db->update($regi['thisId'],$regi['user_id'],$regi['classification'],$regi['username'],$regi['gender'],$regi['userpassword'],$regi['phone'],$regi['email'])){
     ?>
        <script>
            alert("수정완료.");
            location.replace('../view/main.php');
        </script>
    <?php


    }
}
?>

