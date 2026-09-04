<?php
 class Person{
     public $name;

     function __construct($name){
        $this->name = $name;
     }

     function get_name($age){ // Expects an argument
        return $this->name . " is " . $age . " years old."; 
     }
 }
 
 $obj = new Person("Ram");
 
 // PASS THE ARGUMENT HERE: We pass 25 into the function
 echo $obj->get_name(25); 
 // Output: Ram is 25 years old.
?>
