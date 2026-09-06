<?php

class Person{


public static function pname(){

echo "The name of person is Ram.<br>";
}

public function __construct(){
    self::pname();
}

}
Person::pname();
new Person();

?>