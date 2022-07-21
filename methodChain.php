<?php
class User{
    private $query = "Select ";
    
    public function select(string $column)
    {
        $this->query .= " $column";
        return $this;
    }

    public function get()
    {
       return $this->query .= " from users";
    }
}

$obj = new User();


echo $obj->select('name, email')->get();