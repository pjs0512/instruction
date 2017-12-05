<?php
/**
 * Created by PhpStorm.
 * User: pjs
* Date: 2017-12-02
* Time: 오후 8:16
*/
include "db_info.php";
class DB
{
    private $conn;

    function __construct()
    {
        $this->conn = new mysqli(db_info::db_url, db_info::user_id,
            db_info::passwd, db_info::db);
        // 생성자로 DBMS 에 들어감
        if ($this->conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->conn->connect_error;
        }
    }

    function insertCandidate($name)
    {
        $sql = "insert into candidate VALUES (0,'$name',0);";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    function vote($name)
    {
        $sql = "update candidate set voteCount = voteCount + 1 WHERE name='$name'";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }

    }

    function select()
    {
        $sql = "select * from candidate";
        return $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

}



