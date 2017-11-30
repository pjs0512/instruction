<?php
// type hinting 이 사용되는 곳
/*interface testInt{
    public function prtInt();
}
class test implements testInt{
    public function prtInt(){
        echo "prtInt() in test is invoked<br>";
    }
}
class TypeHintingTest{
    function arrayTest (array $a){
        foreach ($a as $key => $value)
            echo "{$key} => {$value}";
    }
    function InterfaceTest(testInt $i){
        $i->prtInt();
    }
    function callableTest(callable $c, $data){
        call_user_func($c,$data);
    }
}

$obj = new TypeHintingTest();

$array = array(1,2,3,4,5);

$obj->arrayTest($array);*/

/*function __autoload($arg){
    include $arg.".php";
}
// 객체를 찍으려는데 없을때 autoload 가 실행됨
$obj = new test();

*/

//namespace  == package  namespace 이름; 하면 밑에 있는 것은 전부 namespace 가 된다. 제일 위에 선언 한파일에 2개 가능
//
