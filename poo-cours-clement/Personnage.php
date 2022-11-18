<?php

/**
 * Exemple de classe sans constructeur avec juste des attributs et méthodes
 */
class Personnage
{

    // Un mot-clé d'accessibilité est obligatoire pour déclarer une variable à la racine de la fonction
    // Il en existe 3 : public, private et protected
    public $pointsDeVie = 100;
    public $nom;

    public function perteDePointsDeVie ()
    {
        // La variable $this est très pratique : elle permet de représenter l'objet, donc la classe, dans laquelle nous nous trouvons
        // On peut donc accéder à nos attributs et nos méthodes avec $this suivi de la flèche ->

        // Traitement de la perte de points de vie quand le personnage subit un dégât
        $this->pointsDeVie -= 10;
    }

}