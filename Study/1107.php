<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-11-07
 * Time: 오전 5:21
 */

/*trait Arms {
    private $itemL = "[trait:Arm] 왼손";
    private $itemR = "[trait:Arm] 오른손";
    private $itemT = "[trait:Arm] 수카수카";

    function prtArms(){
        echo $this->itemL.":";
        echo $this->itemR."<br>";
    }
}
trait HF{
    private $itemH = "[trait:HF] 머리";
    private $itemF = "[trait:HF] 다리";
    function prtHead(){
        echo $this->itemH."<br>";
    }
    function prtFoot(){
        echo $this->itemF."<br>";
    }
}
trait body{
    function prtBody(){
        echo "[trait:body] 몸체<br>";
    }
}
class cbody{
    function prtBody(){
        echo "[class :body]: 몸체<br>";
    }
}
class Gundam extends cbody{
    use HF,Arms,body;
    function printAll(){
        $this->prtHead();
        $this->prtArms();
        $this->prtBody();
        $this->prtFoot();
    }
}
$gundam = new Gundam();


$gundam->printAll();*/

// 다수개의 try catch 가능
// 통으로 try catch 묶기
class PException extends Exception{
}
class AException extends Exception{
}
class Exceptiontest{
    public function ThrowException(){
        try{
            throw new PException();
        }catch (PException $e){
            echo "PException<br>";
            throw new AException();
        }
    }
}
$ex = new Exceptiontest();

try{
    $ex->ThrowException();
}catch (AException $e){
    echo "AException";
}
//DB, 네트워크, 쓰레드
