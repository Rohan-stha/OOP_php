<?php

// PHP program to illustrate normal try catch block code

function demo($var){

echo "Before try block"."<br>";
try{
    echo "Inside try block"."<br>";
 // if var is 0, then it will throw an exception
    if($var == 0){
        throw new Exception("Value must be greater than zero");
        echo "<br> After throw statement"; // This line will not execute 
    }
}

// catch block will be executed only when Exception is thrown from try block
catch(Exception $e){
    echo "Exception caught"."<br>";
    echo "Exception message: ".$e->getMessage()."<br>";
}

// this line will be executed whether exception is thrown or not
echo "After catch block"."<br>";


}
demo(5);//exception will not be thrown as value is greater than zero
echo "<br>";    
demo(0);//exception will be thrown as value is equal to zero


?>