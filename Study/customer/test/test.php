<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-11-30
 * Time: 오전 11:28
 */
include "../model/DB.php";

$db = new DB();

$test = $db->getRecord();

/*$record_1 = $test->fetch_array();

for($i = 0; $i < $test->field_count; $i++){
    echo "{$record_1[$i] }<Br>";
}

echo "<Br>Length count : <br>";

foreach ( $test->lengths as $i=>$val){
    $value = $i + 1;

    echo "Field $value has Length $val";
}
echo "num_rows : $test->num_rows<Br>";
$record_2 = $test->fetch_assoc();
echo "record_2 values<br>";
foreach ($record_2 as $value){
    echo "$value : ";
}
$record_3 = $test->fetch_row();

echo "<br>record_3 values<br>";
foreach ($record_3 as $value){
    echo "$value :";
}

$test->free();*/

/*$value = $test->fetch_all(MYSQLI_ASSOC);
var_dump($value);*/
/*class customer_info{
    function hello(){
        return $this->age + $this->level;
    }
}

$obj = $test->fetch_object('customer_info');

foreach ($obj as $key=>$value) {
    echo "$key : $value<br>";
}
echo $obj->hello();*/

?>
