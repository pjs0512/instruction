<?php

// trait 붙이기 위해서는 use 를 쓰고 use를 쓰면 달라붙는 효과

trait IGoMoYa{
    private $test ="test i-variable";

    function __construct(){
        echo "construct";
    }
    function __destruct(){
        echo "destruct";
        // TODO: Implement __destruct() method.
    }
    function test(){
        echo "test()";
    }
}
trait IGo{
    private $test ="test i-variable";

    function bbbbb(){
        echo "test()";
    }
}
class Main{
    use IGoMoYa,IGo;
    function __construct(){
        echo "12345";
    }

    function test(){
        echo "hello";
    }
}
$main = new Main();
$main->test();
$main->bbbbb();

