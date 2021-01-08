<?php

namespace App;

require __DIR__.'/../vendor/autoload.php';

$voiture = new Voiture(1000, 1800, '205', 3000, 'Peugeot');

dump($voiture);
dump($voiture->giveDenomination());
dump($voiture->getTarif());
dump($voiture->givePop());

// Format attendu de la facture du panier

$facture = [
    "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
    505,
];
