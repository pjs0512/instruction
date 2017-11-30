<?php


class Junsang implements Iterator {
    public $mValue0 = 19;
    public $mValue1 = array(5,4,3,2,1);
    public $psk = array();
    public $mValue2 = array(6,7,8);
    public $mValue3 = array(10,11,12,13);
    public $mValue5 = array(10,11,12,13,12,2,412,5,5,1,2,3,21,);
    public $mValue9 = array(1,15,12,22);
    public $mValue4 = 20;
    public $arr = array(); // 최종 출력 배열


    function __construct(){
        $biggestLength = 0; // 배열중 가장 큰 길이의 값을 넣음
        $isArr = array(); // 최종 출력 배열 중 안의 값이 array 인것을 찾아 arr['키값'] 인데 그 키값들을 모아놓음
        $tempArr = array(); // 배열인 arr의 원소들을 사용하고 난 후 배열의 0번 인덱스의 값을 넣음
        $tempArrCount = 0; // temp 배열의 길이만큼 원소를  다시 넣어줘야함.
        $this->arr = array_filter(get_object_vars($this)); // 공백인 array는 넣지 않는다.

        foreach ($this->arr as $key=>$value){
            if(is_array($value)){
                array_push($isArr, $key); // arr 중에 array 인 원소들 넣음
                $biggestLength = ($biggestLength > count($value))? $biggestLength : count($value); // 배열 중 가장 큰 크기 찾기
            }
        }

        for($i = 0; $i< $biggestLength; $i++){
            foreach ($isArr as $value){
                if($i == 0){
                    array_push($tempArr, $this->arr[$value][0]); // 최초 실행시 0번째 인덱스의 값을 temp 배열에 넣음
                }else if($this->arr[$value][$i] != null){
                    array_push($this->arr, $this->arr[$value][$i]);
                    // key값이 들어있는 $isArr 배열에서 arr의 배열원소 안에서 값을 꺼내 다시 push 해줌
                }
                if($i == $biggestLength-1){ // 마지막 실행시 실행되는 제어문
                    $this->arr[$value]=$tempArr[$tempArrCount]; // arr의 배열 원소 들의 0번째 인덱스 값을 원래의 그 자리로 넣어줌.
                    $tempArrCount ++;
                }
            }
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

    echo "$key => $value<br>";

}