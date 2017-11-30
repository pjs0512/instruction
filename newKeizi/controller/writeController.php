<?php
include "../model/model.php";
$contents =isset($_POST['contents'])?nl2br(str_replace(" ","&nbsp",$_POST['contents'])) : null;
$subject =isset($_POST['subject'])?nl2br(str_replace(" ","&nbsp",$_POST['subject'])) : false;
$id = $_POST['user_id'];

$db = new DB();
$date = date("Y-m-d H:i:s");
if($db->insert(0,$subject,$contents,$id,0,$date)){?>
성공 <input type="button" value="메인으로" onclick="location.replace('mainController.php')">
<?php }?>

