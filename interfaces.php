<?php

//only declare methods
interface parent1{
    function calc($a,$b);
}
interface parent2{
    function sub($c,$d);
}

//must use all methods of parent interfaces
class childClass implements parent1, parent2{
    public function calc($a,$b){
        echo $a + $b;
    }
    public function sub($c,$d){
        echo $c - $d;
    }
}

$test = new childClass();

$test->calc(20,12);
$test->sub(40,15);
?>