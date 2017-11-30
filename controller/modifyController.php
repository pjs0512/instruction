<?php
include '../model/DB.php';
$id =$_POST['idValue'];
$db = new DB();

$info = $db->select("userinfo","userid",$id);

foreach ($info as $value){
    echo $value." ";
}
?>

