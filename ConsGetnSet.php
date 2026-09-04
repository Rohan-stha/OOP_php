<?php
class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    // Getter: No argument needed, just fetches the name
    function get_name() {
        return $this->name;
    }

    // Setter: Takes an argument to CHANGE the name
    function set_name($newName) {
        $this->name = $newName;
    }
}

$obj = new Person("Ram <br>");
echo $obj->get_name(); // Output: Ram

$obj->set_name("Shyam"); // Passing the argument here to change it
echo $obj->get_name(); // Output: Shyam
?>
