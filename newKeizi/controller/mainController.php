<?php
include "../model/model.php";
session_start();
$db = new DB();
$select = $db->select("board");
include "../views/mainView.php";
?>



