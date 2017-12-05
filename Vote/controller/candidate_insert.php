<?php
include "../model/DB.php";

$name = $_POST['name'];

$db = new DB();
    if($db->insertCandidate($name)){
    ?><script>alert("성공!"); location.replace("../view/voting_form.php")</script><?
}else{
    ?><script>alert("적절한 이름이 아닙니다."); location.replace('../view/voting_form')</script><?
}
