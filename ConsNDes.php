<?php

class person {


public $name;
public $age;

function __construct($name){
    $this->name = $name;
}

function __destruct(){

echo "Name: {$this->name}";
}


}
$obj1 = new person("ram");

?>