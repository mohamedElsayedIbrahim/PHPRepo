<?php
class Person{
    public $id;
    protected $name;
    private $age;

    public function eat()
    {
        echo "i am eating Now <br>";
    }

    public function play()
    {
        echo "i am playing Now <br>";
    }

    public function sleep()
    {
        echo "i am slepping Now <br>";
    }
}

class child extends person{

    function __construct()
    {
        $this->name = "defualt";
    }
    public function eat(){
        echo "$this->name eating vag.";
    }

    public function drink(){
        echo "i am driking Now";
    }
}