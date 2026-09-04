<?php
 class Person{

 public $name;

 function __construct($name){
    $this->name = $name;

 }

 function get_name(){
    return $this->name;
 }
 }
 $obj = new Person("Ram");
 echo $obj->get_name();

?>