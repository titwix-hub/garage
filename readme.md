# Mon concessionnaire

## Installation du projet

```bash
# Clone du projet
git clone https://github.com/william-suppo/garage.git
# Création de ma branche
git checkout -b prenom.nom
# Installation des dépendances
composer install
```

## Commandes utiles

```bash
# Mettre à jour les dépendances
composer update
# Lancer mon script
php public/index.php
# Lancer les tests
./vendor/bin/phpunit
```

## Commandes utiles (docker)

```bash
# Mettre à jour les dépendances
docker run --rm -it -v $PWD:/app composer update
# Lancer mon script
docker run --rm -it -v $PWD:/app -w /app php:7.4-cli php public/index.php
# Lancer les tests
docker run --rm -it -v $PWD:/app -w /app php:7.4-cli vendor/bin/phpunit
```

## Critères d'évaluations

Voyez moi comme le chef produit qui va vous demander le développement
de plusieurs fonctionnalités.  
Je ne suis donc pas développeur, ce qui veut dire que vous êtes libre
d'interprétation de l'énoncé **dans certain cas**.  
Exemple : Vous décidez si c'est pertinent de mettre un `int` plutôt qu'un `bool`
ou bien un `int` qui représenterai un timestamp plutôt qu'un objet `DateTime` 
ou encore, **si ce n'est pas explicement demandé**, vous décidez qu'une méthode retourne quelque chose ou non.

Je vous évaluerai via les critères suivants :
+ :star::star::star: La cohérence du diagramme de classe avec l'énoncé
+ :star::star::star: La cohérence du diagramme avec votre code
+ :star::star: La syntaxe du diagramme de classe
+ :star::star: La bonne execution de votre code
+ :star: Le respect des standards [psr-1](https://www.php-fig.org/psr/psr-1/) et [psr-12](https://www.php-fig.org/psr/psr-12/)
+ :star: La vérification du fonctionnement de votre code via des tests.

## Enoncé

> Un Article est un contrat qui offre la capacité de donner un tarif.  
Il a aussi la capacité de fournir une dénomination.

> Une Marque est définie par un nom visible de tous.  

> Un Véhicule est défini par un nom, une Marque et un prix.  
Elle doit être capable de donner sa popularité mais cette notion lui est abstraite.

> Une Voiture est un Véhicule particulier.  
Elle est définie par un compteur kilométrique, une année de construction.  
Elle a la capacité de calculer son niveau d'usure qui vaut la valeur de son compteur multiplié par son nombre d'année.  
Sa popularité est bonne si son année de construction est supérieure à 2010 sinon mauvaise.  
Elle est liée au contrat Article.  
Elle a donc la capacité de donner un tarif qui vaut son prix divisé par son niveau d'usure.  
Elle a aussi la capacité de donner sa dénomination qui vaut celui de sa Marque suivi du sien.  

> Une Citadine est une Voiture particulière.

> Un Utilitaire est un Véhicule particulier.  
Il est défini par son volume et un compteur kilomètrique.  
Sa popularité est bonne si son volume est supérieur à 11 m3 sinon mauvaise.  
Il est lié au contrat Article.  
Il a donc la capacité de donner son prix qui vaut son prix plus son volume multiplié par 10.  
Il a aussi la capacité de donner sa dénomination qui vaut celui de sa Marque suivi du sien.  

> Un Sapin désodorisant est défini par son nom.
Il est lié au contrat Article.  
Il a donc la capacité de donner son prix qui vaut 5 €.  
Il a aussi la capacité de donner sa dénomination qui vaut son nom.

> Un Panier est défini par 0 ou plus Articles.  
Il a la capacité de fournir une facture qui retourne un tableau contenant 2 clés.  
La 1ere a pour valeur les dénominations de tous ses Articles séparés par une virgule.  
La seconde a pour valeur la somme des prix de tous ses Articles.

:muscle: Que La force soit avec vous :muscle:
