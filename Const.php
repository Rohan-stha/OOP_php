<?php
class ConstructorDestructor{


function __construct(){
    echo("Constructed<br>");


}

function something(){

   echo("something is running! <br>");
}

function __destruct(){
    echo("Destructed<br>");
}
}

echo("--One<br>");
$x = new ConstructorDestructor();

echo("--Two<br>");

$y = new ConstructorDestructor();
echo("--Three<br>");
$z = new ConstructorDestructor();

echo("--Fourth time!<br>");
$x->something();


echo("--The End of constructor!<br>");




?>