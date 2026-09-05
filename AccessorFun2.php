<?php

class BankAccount {

private $Balance = 0;
public function setBalance($NewVal){
    $this->Balance = $NewVal;
}

public function getBalance(){
    return $this->Balance;
}

}

if(class_exists("BankAccount")){
    $Checking = new BankAccount();
}else{

exit("<p>The BankAccount class is not available</p>");

}
$Checking->setBalance(100);
echo   "Your checking account balance is " . $Checking->getBalance() . "</p>";
$Checking->setBalance(400);
echo   "Your checking account balance is " . $Checking->getBalance() . "</p>";// <p> tag is used bcz its a block element



?>