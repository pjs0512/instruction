<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-12-02
 * Time: 오후 11:46
 */
include "../model/DB.php";
$name = $_POST['candidate'];
$db = new DB();

$db->vote($name);

?>

<script>alert('<?php echo $name."을 투표 하셨습니다."?>'); location.replace("./voting_viewer.php")</script>

