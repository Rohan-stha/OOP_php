<?php
class Person {
    // Properties (Using lowercase 'public')
    public $name;

    // Methods
    function set_name($name) {
        $this->name = $name; // store  name in the address property of the object that called this method
    }

    function get_name() {
        return $this->name;  // return the value of the address property of the object that called this method
    }
} // <--- MUST CLOSE THE CLASS HERE!

// Now you can safely instantiate objects outside the class
$obj1 = new Person();// instantiate the Person class and assign it to $obj1
$obj2 = new Person();// instantiate the Person class and assign it to $obj2

$obj1->set_name('John');
$obj2->set_name('Tim');//set_name() is a method that sets the value of the $name property for the object it is called on. In this case, it will set 'John' for $obj1 and 'Tim' for $obj2.

echo $obj1->get_name();
echo "<br>";    
echo $obj2->get_name();// get_name() is a method that returns the value of the $name property for the object it is called on. In this case, it will return 'John' for $obj1 and 'Tim' for $obj2.
?>
