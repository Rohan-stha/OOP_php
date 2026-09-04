<?php
// 1. Define the class first so PHP knows it exists
class BankAccount {
    // Class properties and methods go here
}


class Dog{

}



// 2. Instantiate the object
$Checking = new BankAccount();
$run = new Dog();

// 3. Output the class name with matching HTML tags
echo '<p>The $Checking object is instantiated from the ' . get_class($Checking) . ' class.</p>';
echo '<p>' . get_class($run) . '</p>';
?>
