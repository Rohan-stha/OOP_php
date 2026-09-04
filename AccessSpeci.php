<?php
 class Person{

 public $name;
 protected $age;
 private $weight;
 }
 $obj = new Person();
 echo $obj->name = "Ram";
//  echo $obj->age = "19"; cannot access protected property
//  echo $obj->weight = "66"; cannot access private property

?>