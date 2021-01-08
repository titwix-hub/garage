<?php

namespace App;

class Utilitaire extends Vehicule
{
    protected int $volume;
    protected int $compteur;

    public function givePop(): bool
    {
        if($this->volume > 11){
            return true;
        }else{
            return false;
        }
    }

    public function getTarif(): int
    {
        return $this->prix + ($this->volume * 10);
    }
    
    public function giveDenomination(): string
    {
        return $this->nameMarque." ".$this->name;
    }

    // à faire
    public function __construct(int $volume, int $compteur, string $name, int $prix, string $nomMarque)
    {
        $this->volume = $volume;
        $this->compteur = $compteur;
        $this->name = $name;
        $this->prix = $prix;
        $this->nameMarque = $nameMarque;
    }
}