<?php

namespace App\Cutlery;

class Spoon
{
    protected $scoops = 0;  // Property HAS to be 'protected' to be used in child class

    public function scoop(): Spoon
    {
        $this->scoops += 1;
        return $this;
    }

    public function howManyScoops(): int
    {
        return $this->scoops;
    }
}
