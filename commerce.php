<?php

interface E_commerce{
    function add_product();
    function view_product();
    function buy_product();
}

class Amazon implements E_commerce{
    function add_product(){
        echo "Your product is Added to DB <br>";
    }
    function view_product(){
        echo "Your product is viewed from DB <br>";
    }
    function buy_product(){
        echo "Your product is buy <br>";
    }
}

class Jumia implements E_commerce{
    function add_product(){
        echo "Your product is Added to DB <br>";
    }
    function view_product(){
        echo "Your product is viewed from DB <br>";
    }
    function buy_product(){
        echo "Your product is buy <br>";
    }
}

class Noon implements E_commerce{
    function add_product(){
        echo "Your product is Added to DB <br>";
    }
    function view_product(){
        echo "Your product is viewed from DB <br>";
    }
    function buy_product(){
        echo "Your product is buy <br>";
    }
}


//Site Zone 

function seller(E_commerce $object){
    $object->add_product();
}

function custommer (E_commerce $object){
    $object->view_product();
    $object->buy_product();

}

//user Zone 

$user = new Noon();

custommer($user);

















