<?php
include "../model/model.php";
$id = $_POST['id'];
$pw = $_POST['pw'];

$db = new DB();

if($db->login($id,$pw)){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user_id'] = $_POST['id'];
    $_SESSION['user_pw'] = $_POST['pw'];
    echo "성공";
    ?><input type='button' value='메인으로' onclick='location.replace("mainController.php")'><?php
}else{
    echo "실패";
    ?><input type='button' value='메인으로' onclick='location.replace("mainController.php")'><?php
}
?>


