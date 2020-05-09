<?php

namespace App\Languages;

abstract class Language  // Abstract class - Cannot be called directly 
{
    protected $name;

    public function name(): string
    {
        return $this->name;
    }

    abstract public function hello(): string; // Return type must match in English.php etc.
}
