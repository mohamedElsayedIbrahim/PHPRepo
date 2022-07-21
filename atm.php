<?php

class Atm{
    private $cardNumber;
    private $password;
    private $balance;

    function __construct()
    {
        $this->cardNumber = "123456789";
        $this->password = "1234";
        $this->balance = 1000;
    }
    public function withdraw($cardNumber , $pin , $cost)
    {
        if(
            $cardNumber == $this->cardNumber
            && $pin == $this->password
            && $cost <= $this->balance
        ){
            $this->balance = $this->balance - $cost;

            echo "Successful Withdraw your blance is $this->balance";
        } else{
            echo "operation can not complate";
        }
    }
}