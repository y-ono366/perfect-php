<?php

function part5xx(){
    if('0.0' === '0'){
        echo '"0.0"と"0"は同じ',PHP_EOL;
    }else{
        echo '"0.0"と"0"は違う',PHP_EOL;
    }
}
function part561(){
    $a = 10;
    $b =& $a;
    $c = $a;

    $b = 20;
    echo $a,PHP_EOL;
    echo $b,PHP_EOL;
    echo $c,PHP_EOL;
}

function part562(){
    $a = 10;
    $ref =& $a;
    $ref = 30;
    echo $a;
}

class Ref{
    function array_pass($array){
        $array[0] *= 2;
        $array[1] *= 2;
    }

    function array_pass_ref(&$array){
        $array[0] *= 2;
        $array[1] *= 2;
    }

    function play(){
        $a = 10;
        $b = 20;
        $ar = [$a,$b];
        $this->array_pass_ref($ar);
        var_dump($a,$b);
        var_dump($ar);
    }
}

class RefClass{
    function __construct(){
        echo "オブジェクトが生成されました。";
    }
    function __destruct(){
        echo "オブジェクトが破棄されました。";
    }
}

class CopyOnRight{
    function play(){
        $a = 10;
        $b = $a;
    }
}
