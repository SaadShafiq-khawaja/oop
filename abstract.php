<?php
abstract class student{

public $name;
abstract protected function calc($a, $b);

}

class marks extends student{
    public function calc($x, $y){
        echo $x + $y;
    }
}


$total = new marks();
$total->calc(10,20);
?>