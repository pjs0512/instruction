<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-11-23
 * Time: 오후 12:44
 */
include "db_info.php";
class DB{
    private $conn;
    function __construct(){
        $this->conn = new mysqli(db_info::db_url, db_info::user_id,
            db_info::passwd, db_info::db);
        // 생성자로 DBMS 에 들어감
        if($this->conn->connect_errno){
            echo "Failed to connect to MySQL: ". $this->conn->connect_error;
        }
    }

    function getRecord(){
        $result = $this->conn->query("select * from customer");

        return $result;

    }


}

// $conn->affected_row() --> 몇 행에 반영 되었는가?????
// phpadmin 을 활용해 sql 문을 틀리지 않도록 하자!!!
// mysqli_result 객체가 넘어옴;
// fetch_array, fetch_object
// data_seek



