<?php
class BankAccount {
    public $Balance = 958.50;

    public function withdrawal($Amount){
    
        $this->Balance -= $Amount; 
    }
}

if(class_exists("BankAccount")) {
    $Checking = new BankAccount();
} else {
    exit("<p> The BankAccount class is not available</p>");
}

printf("<p> Your checking account balance is $%.2f.</p>", $Checking->Balance);
$Cash = 200;
$Checking->withdrawal($Cash);

// Fixed the second %.2f formatting typo here as well
printf("<p> After withdrawing $%.2f, your checking account balance is $%.2f.</p>", $Cash, $Checking->Balance);
?>
