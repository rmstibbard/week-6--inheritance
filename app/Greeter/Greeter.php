<?php

namespace App\Greeter;

use App\Languages\Language;   // Using a class from a different namespace

class Greeter
{
    private $language;

    public function __construct(Language $language)  // Pass everything from Language class in
    {
        $this->language = $language; // Set property
    }

    public function greet(string $name): string
    {
        return "{$this->language->hello()} {$name}";
    }
}
