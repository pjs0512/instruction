<?php
//객체 직렬화 : 객체의 대한 정보를 일직선으로 만들어버리기
class Test{
    public $var1 = "variable";
    public $arr = array(1,2,3,4,5,6,7,10);
    public $var2 = "";
    function printAllVariable(){
        echo $this->var1.":",$this->var2."<br>";
    }
    function setVariable2($argValue){
        $this->var2 = $argValue;
    }
}
?>
<div id="hello"><?php echo json_encode(new Test()); ?></div>

<script>
    var dv = JSON.parse(document.getElementById('hello').innerText);
    alert(dv.arr[2]);
</script>