<?php

abstract class Employee{
    abstract public function work();
}

class Programmer extends Employee{
    public function work()
    {
    }
}
$obj = new Programmer();
var_dump($obj->work());
