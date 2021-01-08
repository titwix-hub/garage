<?php

namespace App;

class Panier
{

    public function getPanier(array $articles): array
    {
        $panier = [];
        $prix = [];
        $facture = [];
        foreach($articles as $article){
            array_push($panier, $article->nameMarque);
            array_push($prix, $article->prix);
        }

        $facture[0] = implode(", ", $panier);
        $facture[1] = array_sum($prix);
        return $facture;
    }
}