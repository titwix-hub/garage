<?php

namespace App;

class Voiture extends Vehicule implements Article
{
    protected int $compteur;
    protected int $annee;

    protected function calcUsure(): int
    {
        if(date("Y") != $this->annee){
            return $this->compteur * (date("Y") - $this->annee);
        }else{
            return 0;
        }
    }

    public function givePop(): bool
    {
        if($this->annee > 2010){
            return true;
        }else{
            return false;
        }
    }

    public function getTarif(): int
    {
        return $this->prix / $this->calcUsure();
    }

    public function giveDenomination(): string
    {
        return $this->nameMarque." ".$this->name;
    }
    // à continuer
    public function __construct(int $compteur, int $annee, string $name, int $prix, string $nameMarque)
    {
        $this->compteur = $compteur;
        $this->annee = $annee;
        $this->name = $name;
        $this->prix = $prix;
        $this->nameMarque = $nameMarque;
    }
}
