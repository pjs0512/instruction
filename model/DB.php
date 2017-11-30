<?php

class DB{
private $con = null;
    function __construct(){
        $this->con = mysqli_connect('localhost','root','autoset','midtermexam');
    }

    function insert($user_id,$classification,$username,$gender,$userpassword,$phone,$email){

        $query = "insert into userinfo VALUE(0,'$user_id','$classification','$username','$gender','$userpassword','$phone','$email')";
        if(mysqli_query($this->con,$query))
            return true;
        else
            return false;


    }
    function select(){
        switch (func_num_args()){
            case 0:
                $query = "select * from userinfo";
                $result = mysqli_query($this->con, $query);
                $returnValue = mysqli_num_rows($result);
                    return $returnValue;
            case 1:
                $to = func_get_args()[0];
                $query = "select * from userinfo ORDER by sysid DESC limit $to,5 ";
                $result = mysqli_query($this->con,$query);
                $valueArr = array();
                for($i = 0; $i< mysqli_num_rows($result);$i++) {
                    array_push($valueArr, mysqli_fetch_assoc($result));
                }
                return $valueArr;
                break;
            case 3:
                $table = func_get_args()[0];
                $row = func_get_args()[1];
                $id = func_get_args()[2];

                $query = "select * from $table where $row= '$id'";
                if($result = mysqli_query($this->con, $query)){
                    $returnValue = mysqli_fetch_assoc($result);
                    return $returnValue;
                }else{
                    return false;
                }
            default:
                break;
        }
    }
    function update($thisId,$user_id,$classification,$username,$gender,$userpassword,$phone,$email){
        $query = "UPDATE userinfo SET userid='$user_id',classification='$classification',name='$username',gender='$gender',password='$userpassword',phone='$phone',email='$email' WHERE userid = '$thisId'";

        if(mysqli_query($this->con, $query)){
            return true;
        }else{
            return false;
        }
    }
    function delete($id){
        $query =  "delete from userinfo where userid ='$id'";
        if(mysqli_query($this->con, $query)){
            return true;
        }else{
            return false;
        }
    }


}

?>