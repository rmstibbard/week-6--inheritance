<?php

namespace App\Cutlery;

class Spoon
{
    protected $scoops = 0;  // Property has to be 'protected' to be used in child classes

    public function scoop()
    {
        $this->scoops += 1;
        return $this;
    }

    public function howManyScoops()
    {
        return $this->scoops;
    }
}
