<?php

class Math{
    static $message;

    static public function sum($a , $b)
    {
        self::$message = "hello";
        echo ($a + $b);
    }

    public function multiple($a , $b)
    {
        echo ($a * $b);
    }

    public function abs_value($a)
    {
        
        if($a <0){
            $a = $a * -1;
        }
        echo $a;
    }
}

Math::sum(5,5);
echo Math::$message;
$obj = new Math();
$obj->abs_value(-5);