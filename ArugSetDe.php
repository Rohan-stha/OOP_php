<?php
 class Person{
     public $name;

     function __construct($name){
        $this->name = $name;
     }

     // By setting $age = 0, the argument becomes optional!
     function get_name($age = 0){ 
        return $this->name;
     }
 }
 
 $obj = new Person("Ram");
 
 // This will now work without crashing because $age defaults to 0
 echo $obj->get_name(); 
 // Output: Ram
?>
