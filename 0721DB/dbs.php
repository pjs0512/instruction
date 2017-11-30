<?php
$type = $_POST['type'];
const host = "localhost";
const hostId = "root";
const hostPw = "autoset";
const dbName = "junsang";
const tabName = "nokia";

$connection = mysqli_connect(host,hostId,hostPw);

mysqli_select_db($connection, dbName);

if($type == 1 )
    selectQuery();
if($type == 2 )
    CAQurey();
if($type == 3 )
    prtalgori();
if($type == 4 )
    algorithm();

echo $type;

function prtalgori(){
    global $connection;
    $query = "select * from algori";
    $select = mysqli_query($connection,$query);
    for($i=0; $i<mysqli_num_rows($select);$i++){
        $result = mysqli_fetch_row($select);
        echo $result[0]." ".$result[1]." ".$result[2]." ".$result[3]." ".$result[4].",";
    }
}
function algorithm(){
    global $connection;
    $query = "TRUNCATE algori";
    mysqli_query($connection,$query);
    $query = "select DISTINCT a.enbid , a.lncel , a.ca, b.cellid
              from nokia as a inner join nokia as b 
              on a.enbid = b.enbid 
              and a.pci<>b.pci 
              and a.frequency<>b.frequency 
              ORDER by a.enbid, a.lncel";
    $select = mysqli_query($connection,$query);
    $array = array();
    for($i =0; $i<mysqli_num_rows($select);$i++){
        $result = mysqli_fetch_row($select);
        $array[] = array($result[0],$result[1],$result[2],$result[3],"2");
    }
 for($i =0;$i<count($array);$i++){
        if($array[$i][1] == $array[$i+1][1] && $array[$i][2] == $array[$i][2]){
            $j = 1;
            while($array[$i][1] == $array[$i+$j][1]){
                $array[$i+$j][2] +=1;
                if($array[$i+$j][2] >5){
                    $array[$i+$j][2] = 1 ;
                    break;
                }
                $j++;
            }
        }
    }
    foreach($array as $data){
        $query = "insert into algori values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
        mysqli_query($connection,$query);
    }
}
function selectQuery(){
    global $connection;
    $query = "select * from ".tabName;
    $select = mysqli_query($connection,$query);
    for($i=0;$i<mysqli_num_rows($select);$i++){
        $result = mysqli_fetch_row($select);
        echo $result[0]." ".$result[1]." ".$result[2]." ".$result[3]." ".$result[4]." ".$result[5].",";
    }
}

function CAQurey(){
    global $connection;
    $query = "update nokia as a, (select pci,count(pci) as c from nokia group by enbid,pci)as b 
              set ca = b.c
              where a.pci = b.pci";
    if($queryStart = mysqli_query($connection,$query))
        echo "쿼리 완료";
}


?>