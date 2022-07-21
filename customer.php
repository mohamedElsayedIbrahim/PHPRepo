<?php

class reward{
    private $Points = 0;

    public function lv1()
    {
        $this->Points +=1;
        return $this;
    }

    public function lv2()
    {
        $this->Points +=2;
        return $this;
    }

    public function lv3()
    {
        return $this->Points +=3;
    }
}


$obj = new reward();

echo $obj->lv1()->lv2()->lv3();