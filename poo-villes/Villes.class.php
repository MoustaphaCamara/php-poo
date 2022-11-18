<?php
class Ville
{
    public function __construct(string $nom, string $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }
    // public function displayCity($nom, $departement)
    // {
    //     return "La ville $nom appartient au département $departement";
    // }
    // là j'ai demandé 2 paramètres donc j'ai à les passer,  mais si je mets directement $this->nom je peux réutiliser la variable nom déclarée plus haut sans demander de paramètres à displayCity
    public function displayCity()
    {
        return "La ville de $this->nom appartient au département $this->departement";
    }
}
