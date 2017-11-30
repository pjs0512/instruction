<?php
$con = mysqli_connect("localhost","root","autoset","board");
$page = isset($_POST['page'])? $_POST['page']: 1 ;

mysqli_set_charset($con,"utf8");

$result = $con->query("select * from board ORDER by reg_date desc limit $page,5");

$data = array();

$numRows = $result->num_rows;

for($i =0; $i<$numRows; $i++){
    array_push($data, $result->fetch_assoc());
}
$json = json_encode(array("jsonValues"=>$data));
/*echo $json;*/
echo $json;

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo "Hello!!!!";
}else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $userId = $_POST['userid'];
    $password = $_POST['password'];
    if(empty($userId) || empty($password)){
        echo "NULL";
    }

    if($userId == "user" && $password ==1234){
        echo "result OK";
    }else{
        echo "result NO";
    }
}
