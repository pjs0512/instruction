<?php
/**
 * Created by PhpStorm.
 * User: pjs
 * Date: 2017-11-23
 * Time: 오전 11:06
 */
// 여러개를 합칠 때, 겹치지 않기 위해서, 큰 상자 안에 작은 상자 넣는 느낌;
// 네임스페이스 명은 파일명과 맞출 필요 X
/*namespace opop;
include "Myproject/level1/level2/test.php";

function SaySomething(){

    echo "Myproject\level1\level2\test:: CYKA CYKA<br>";

}

\qw\SaySomething();*/
include "Myproject/level1/level2/test.php";

use util\part1\test1 as p1;
use util\part2\test2 as p2;

class test2{
  static function cyka(){
      echo "1123 cyka";
  }
}
\util\part2\test2::cyka();

