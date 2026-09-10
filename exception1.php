<?php


try{
    //rand(0,1) will generate either 0 or 1 randomly between 0 and 1 inclusive
    $val =rand(0,1);

    //if $val is equal to 0, throw error - this gives a 50/50 chance that an error will be thrown when this code is executed
        if($val == 0){
            throw new Exception("Uh oh! there was an error!<br>");

        }
} catch(Exception $e) {

// The Exception class object $e will contain detail about the error
echo "Caught error with message<br>:" . $e->getMessage();
}finally{
    echo"There is a 50 50 chance thatan error was just thrown.<br>";
}


?>