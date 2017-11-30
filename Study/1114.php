<?php
class Junsang implements Iterator {
    public $mValue0 = 19;
    public $mValue1 = array(5,4,3,2,1);
    public $psk = array();
    public $mValue2 = array(6,7,8);
    public $mValue3 = array(10,11,12,13);

    public $mValue4 = 20;
    public $arr = array(); // 최종 출력 배열

    function __construct(){
        $biggestLength = 0;
        // 배열중 가장 큰 길이의 값을 넣음
        $isArr = array();
        // 최종 출력 배열 중 안의 값이 array 인것을 찾아 arr['키값'] 인데 그 키값들을 모아놓음
        $this->arr = array_filter(get_object_vars($this));
        // 공백인 array는 넣지 않는다.

        foreach ($this->arr as $key=>$value){
            if(is_array($value)){
                array_push($isArr, $key); // arr 중에 array 인 원소들 넣음
                $biggestLength = ($biggestLength > count($value))? $biggestLength : count($value);
                // 배열 중 가장 큰 크기 찾기
            }
        }
        for($i = 0; $i< $biggestLength; $i++){
            foreach ($isArr as $value){
                if($this->arr[$value][$i] != null){ // 배열이 null 이 아닐 때
                    array_push($this->arr, $this->arr[$value][$i]);
                    // key값이 들어있는 $isArr 배열에서 arr의 배열원소 안에서 값을 꺼내 다시 push 해줌
                }
            }
        }
        foreach ($isArr as $value){
            unset($this->arr[$value]); // 원래의 배열 삭제
        }
    }

    public function current()
    {
        return current($this->arr);
    }

    public function next()
    {
        next($this->arr);
    }
    public function key()
    {
        return key($this->arr);
    }
    public function valid()
    {
        if(key($this->arr) !== false && current($this->arr) != null){
            return true;
        }
        return false;
    }
    public function rewind()
    {
        reset($this->arr);
    }

}

$obj = new Junsang();

foreach ($obj as $key=>$value){

    echo "$key:$value<br>";

}