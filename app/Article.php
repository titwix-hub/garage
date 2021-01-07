<?php

namespace App;

interface Article
{
    public function getTarif(): int;

    public function giveDenomination(): string;

}