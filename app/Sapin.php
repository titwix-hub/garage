<?php

namespace App;

class Sapin
{
    protected string $name;
    protected int $price = 5;

    // à faire
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}