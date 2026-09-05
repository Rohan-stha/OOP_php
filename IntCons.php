<?php
 class Person{

 public $name;

 function __construct($name){// space required between functon and construct
    $this->name = $name;

 }

 function get_name($age){
    return $this->name;
 }
 }
 $obj = new Person("Ram");
 $obj1 = new Person(5);
 echo $obj->get_name();
 echo $obj->get_name();

?>