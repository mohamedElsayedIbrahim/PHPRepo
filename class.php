<?php

class Employee{
    //propreties of class
    public $name;
    public $id;
    //constractor
    function __construct()
    {
        $this->name = "defualt";
    }
    // class methods
    public function login()
    {
        echo "$this->name login the company <br>";
    }

    public function work()
    {
        echo "i'm working in office <br>";
    }

    public function logout()
    {
        echo "i'm leave the company <br>";
    }
}

$employee1 = new Employee();
$employee1->name = "ISLAM";
$employee1->id = "156";
$employee1->login();

$employee2 = new Employee();
$employee2->name = "Hossam";
$employee2->id = "953";
$employee2->login();

$employee3 = new Employee();
$employee3->name = "Ahmed";
$employee3->login();












