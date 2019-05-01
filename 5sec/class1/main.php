<?php
class Employee {
    public $test = 10;
    public function work(){
        echo $this->test,PHP_EOL;
    }
    public function addtest(){
        $this->test = 50;
    }
}

$yamada = new Employee();
$yamada->work();

$suzuki = $yamada;
$suzuka = clone $yamada;
$suzuki->addtest();
$suzuki->work();
$yamada->work();

var_dump($suzuka);
