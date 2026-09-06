<?php

abstract class Person{



abstract public function getName($name);//compulsory to implement in child class because it is abstract method
// public function getAge($age){
//     echo "My age $age";
// }
}

class Ram extends Person{

public function getName($name){
    echo "My name $name".'<br>';
}

public function getAge($age){
    echo"MY age $age";
}
}

$obj=new Ram;
$obj->getName("Rohan");
$obj->getAge("21");

?>