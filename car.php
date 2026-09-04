<?php


class Car{
public $name;

function set_name($name){
    $this->name = $name;
}

function get_name(){

   return  $this->name;
}


}

$obj1 = new Car();
$obj2 = new Car();


$obj1->set_name("Toyota");
$obj2->set_name("Mercedes-Benz");

echo "first car name is " . $obj1->get_name();
echo "<br>";
echo "Second car name is " . $obj2->get_name();




?>