<?php
include "../model/DB.php";
session_start();
$_POST['rightArrow'] = isset($_POST['rightArrow'])? true : false;
$_POST['rightAllArrow'] = isset($_POST['rightAllArrow'])? true : false;
$_POST['leftArrow'] = isset($_POST['leftArrow'])? true : false;
$_POST['leftAllArrow'] = isset($_POST['leftAllArrow'])? true : false;

$_SESSION['page'] = empty($_SESSION['page'])? 1 : $_SESSION['page'];
$_SESSION['page'] = isset($_POST['page'])? $_POST['page']: $_SESSION['page'];
$db = new DB();
$_SESSION['lastPage'] = (int)((($db->select())+ 4 )/5) ;
if($_POST['rightArrow']){
    $_SESSION['page'] += 5;
    if($_SESSION['page'] >$_SESSION['lastPage']){
        $_SESSION['page'] = $_SESSION['lastPage'];
    }
}
if($_POST['rightAllArrow']){
    $_SESSION['page'] = $_SESSION['lastPage'];
}
if($_POST['leftArrow']){
    $_SESSION['page'] -= 5;
    if($_SESSION['page'] <1){
        $_SESSION['page'] = 1;
    }
}
if($_POST['leftAllArrow']){
    $_SESSION['page'] = 1;
}
$select = $db->select(($_SESSION['page']-1)*5);

include "../view/list.php";

?>