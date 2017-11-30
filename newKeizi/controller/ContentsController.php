<?php
include "../model/model.php";
$db = new DB();

$board_id=$_GET['board_id'];

$select = $db->select("board","board_id",$board_id);

include "../views/contentsView.php";


?>
