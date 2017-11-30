<?php
//객체의 멤버변수가 없을때 매직 메서드
//A클래스에 멤버변수가 없을때 호출하면 매직 메서드가 실행됨,
// __set,__get,__isset,__unset 은 변수
// __call -> 없는 인스턴스 메소드를 호출할 때 호출됨
// __callstatic -> 없는 클래스 메서드를 호출 할 때 호출됨
/*class  A{
    private $arr = array();
    function __get($name){
        if(isset($name)){
            return $this->arr[$name] ;
        }else{
            echo 1234;
            return false;
        }

    }
    function __set($name, $value)
    {
        $this->arr[$name] = $value;
    }
    function __isset($name)
    {
        return isset($this->arr[$name]);
    }
    function __unset($name)
    {
        if(isset($name)){
            unset($this->arr[$name]);
        }else{
            return false;
        }
    }
}
$a = new A();
$a->a = 44;
unset($a->b);*/
/*class A{
    function __call($name, $arguments)
    {
        switch ($name){
            case 'hello' :
                switch (count($arguments)){
                    case 1: echo "안녕"; break;
                    case 2: echo "잘가"; break;
                    case 3: echo "힝"; break;
                    default: echo "깔깔";
                }
            break;
        }
    }
    static function __callStatic($name, $arguments)
    {
        echo $name."은 없습니다.";
        echo "대신 이걸 드리겠습니다.";
        foreach ($arguments as $argument){
            echo "ㅁ".$argument."ㅁ";
        }
        // TODO: Implement __callStatic() method.
    }
}
$a = new A();

$a->hello('a','b');

A::tru(1,2,3,4);*/

// 추상클래스는 강제성
abstract class Ab{
    abstract protected function prtHello();
    abstract protected function prtTrue();

    public function prtTroll(){
        echo "Troll";
    }
}
class A extends Ab {
    public function prtHello()
    {
        echo "hello";
        // TODO: Implement prtHello() method.
    }
    public function prtTrue()
    {
        echo "true";
    }

}
$a = new A();

$a->prtTrue();
// 인터페이스는 abstract 생략 , 상수와 메서드만 가능;

// 인터페이스 사용 이유
//





?>
<script>

</script>


