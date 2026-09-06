<?php
interface MyInterface{
    public function getName($name);
    public function getAge($age);
}

class MyClass implements MyInterface{

public function getName($name){

echo"My name is $name".'<br>';
}

public function getAge($age){
    echo "My age is $age";
}
}
$obj = new MyClass;
$obj->getName("Rohan");
$obj->getAge("44");



?>