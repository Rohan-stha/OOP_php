<?php


class Person{


public $name;
function set_name($name){

  $this->name = $name;
}

function get_name(){
    return $this->name;
}
}

$obj1 = new Person();
$obj2 = new Person();
$obj1->set_name("Rohan");
$obj2->set_name("Kumar");

echo $obj1->get_name();
echo"<br>";
echo $obj2->get_name();

?>