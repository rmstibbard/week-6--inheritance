<?php

namespace App\Languages;

abstract class Language  // Abstract class - Cannot be called directly 
{
    protected $name;

    public function name()
    {
        return $this->name;
    }

    abstract public function hello();
}
