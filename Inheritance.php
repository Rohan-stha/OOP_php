<?php

class Person{


public $name;
public $age;
public function __construct($name,$age){
    $this->name = $name;
    $this->age= $age;

}
protected function printme(){

echo "The person name is {$this->name}  and   the age is {$this->age} <br>";

}

}

//Ram is inherited from person

class Ram extends Person{

 public function message(){
echo "hello world!<br>";
$this->printme(); // call protected method from within derived class



 }
}

$Ram = new Ram("Ram", "30");
$Ram->message();


?>