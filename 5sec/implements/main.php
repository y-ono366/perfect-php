<?php

interface Render{
    public function read();
    public function read2();
}

interface Writer{
    public function write($value);
}

class Configure implements Render,Writer{
    public function write($value) {
    }

    public function read(){
    }
    public function read2(){
    }
    public function ec(){
        echo "test",PHP_EOL;
    }
}
var_dump((new Configure())->ec());
