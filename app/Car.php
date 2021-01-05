<?php

namespace App;

class Car
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
