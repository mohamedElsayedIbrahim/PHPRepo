<?php
//wordpress CMS
//==========================================
abstract class WP_plugin{
    final public function connectDb()
    {
        echo "connect wordpress Database <br>";
    }

    abstract public function logic();

    final public function disConnectDb()
    {
        echo "disconnect wordpress Database <br>";
    }
}

//Developer Zone
//=====================================================

class classfulChat extends WP_plugin{
    public function logic(){
        echo "chat logic <br>";
    }
}

class Map extends WP_plugin{
    public function logic()
    {
        echo "application google map <br>";
    }
}

//Application Zone
//==============================================

$obj = new classfulChat();
$obj->connectDb();
$obj->logic();
$obj->disConnectDb();

$obj2 = new Map();
$obj2->connectDb();
$obj2->logic();
$obj2->disConnectDb();




