<?php

/*
Bank System
*/

interface Database{
    public function connect();
    public function Run();
    public function disconnect();
}

class MySQLDatabase implements Database{
    public function connect(){
        echo "Database Connect <br>";
    }

    public function Run(){
        echo "Database Run <br>";
    }

    public function disconnect(){
        echo "Database Disconnect <br>";
    }
}

Class SQLServerDatabase implements Database{
    public function connect(){
        echo "Database Connect <br>";
    }

    public function Run(){
        echo "Database Run <br>";
    }

    public function disconnect(){
        echo "Database Disconnect <br>";
    }
}

Class MangorDatabase implements Database{
    public function connect(){
        echo "Database Connect <br>";
    }

    public function Run(){
        echo "Database Run <br>";
    }

    public function disconnect(){
        echo "Database Disconnect <br>";
    }
}



/* Developer Side */

function BankConnection(Database $db){
    $db->connect();
    $db->Run();
    $db->Disconnect();
}

/* Client System Fathallah */

$obj = new SQLServerDatabase();

BankConnection($obj);