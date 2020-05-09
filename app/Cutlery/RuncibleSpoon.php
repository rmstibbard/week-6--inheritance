<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
    public function scoop(): Spoon  // Taken from 'protected' method in parent class
    {
        $this->scoops += 2;
        return $this;
    }
}
