<?php

class Users{

    static public function all()
    {
        echo "Select * from users";
    }
    
    static public function select(string $column)
    {
        echo "Select $column";
    }

    static public function get()
    {
        echo " from Users";
    }

    static public function create()
    {
        # code...
    }
}

Users::select('name , email');
Users::get();
echo "<br>";
Users::all();
