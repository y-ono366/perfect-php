<?php

function part411(){
    if(true) if(true){
        echo 1,PHP_EOL;
    }
}

?> 
<?php
function part413(){
    if(true):
?>

<?php 
        echo "ブロック内";
    endif; //ブロック文の閉じ構文
}

function part414(){
    $i = 0;
    while($i < 10) {
        echo $i,PHP_EOL;
        $i++;
    }
}

function part415(){
    $i = 0;
    do{
        echo $i,PHP_EOL;
        $i++;
    }while($i<10);
}

function part416(){
    $ar = [1,2,3,4,5];
    for($i=0;$i<count($ar);$i++){
        echo $ar[$i];
    }
}

function part417(){
    $ar = [1,2,3,4,5];
    foreach($ar as $key => &$val){
        echo $val,PHP_EOL;
    }
    unset($val);
}

function part419(){
    $te = 1.0;
    switch($te){
        case'1':
            echo "浮動小数点1.0と文字列1は同じ",PHP_EOL;
        case '01.0':
            echo "浮動小数点1.0と文字列01.0は同じ",PHP_EOL;
    }

    switch($te){
        case $te === '1':
            echo "【厳重比較】浮動小数点1.0と文字列1は同じ",PHP_EOL;
        case $te === '01.0':
            echo "【厳重比較】浮動小数点1.0と文字列01.0は同じ",PHP_EOL;
    }
}

function array_output(array $var){
    var_dump($var);
}

function part423(){
    $ar = [1,2,3.4,4.5,"6",true];
    $new_ar = array_map('strval',$ar);
    var_dump($new_ar);
}

function part424(){
    function func_caller($name){
        if(function_exists($name)){
            $name();
        }
    }
    function foo(){
        echo "foo called",PHP_EOL;
    }
    func_caller('foo');
}

function part425(){
    $add = function($v1,$v2){
        return $v1+$v2;
    };
    echo $add(1,2),PHP_EOL;

    $ar = ['"ダブルクオート"','<tag>','\'シングルクォート\''];
    $escaped = array_map(function($val) {
        return htmlspecialchars($val,ENT_QUOTES);
    },$ar);
    var_dump( $escaped,PHP_EOL);
}

function part425_1(){
    $my_pow = function($items=2) {
        return function ($v) use(&$items){
            return pow($v,$items);
        };
    };
    var_dump($my_pow(3));
}

part411();
part413();
part414();
part415();
part416();
part417();
part419();
array_output([1,2,3]);
part423();
part424();
part425();
part425_1();
