<?php

class Person{
    public function info(){

    echo"<br> In the base class";

    }

}

class Ram extends Person{//Ram inherited from Person

// override the method info() of base class
public function info(){
    echo"<br/> In the derived class";
}
}

$obj1 = new Person();
$obj1->info();
$obj2 = new Ram();
$obj2->info();
?>