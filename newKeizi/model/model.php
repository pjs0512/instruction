<?php
class DB{
    const DB_HOST = "localhost";
    const DB_DBNAME = "hello";
    const DB_ID = "root";
    const DB_PASSWORD = "autoset";
    private $con = null;
    function __construct(){
        $this->con = mysqli_connect(self::DB_HOST,self::DB_ID,self::DB_PASSWORD,self::DB_DBNAME);
    }
    function select(){
        if($this->con ==null) return;
        switch (func_num_args()){
            case 1:
                $table=func_get_args()[0];
                $query = "select * from $table";
                $sql = mysqli_query($this->con,$query);
                $resultArr = array(); // 중요
                for($i=0;$i<mysqli_num_rows($sql);$i++){
                    array_push($resultArr,mysqli_fetch_assoc($sql));
                }
                return $resultArr;
                break;
            case 3:
                $table = func_get_args()[0];
                $row = func_get_args()[1];
                $value = func_get_args()[2];
                $query = "select * from $table where $row = $value";
                $sql = mysqli_query($this->con,$query);
                return mysqli_fetch_assoc($sql);
        }
    }
    function login($id, $pw){
        $query = "select * from user_info where id = '$id' AND pw = '$pw'";
        $sql = mysqli_query($this->con,$query);
        if(mysqli_num_rows($sql))return true;
        else return false;
    }
    function insert($board_id,$subject,$contents,$id,$hits,$date){
        $query = "insert into board VALUES($board_id,'$subject','$contents','$id',$hits,'$date')";
        if(mysqli_query($this->con,$query))
            return true;
        else
            return false;
    }
}