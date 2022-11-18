<?php
class Personne
{
    public function __construct(string $nom, string $prenom, string $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }
    public function getInfos()
    {
        return "Cette personne s'appelle $this->nom $this->prenom et vit au $this->adresse ";
    }
    public function setInfos(string $nouveauNom, string $nouveauPrenom, string $nouvelleAdresse)
    {
        $this->nom = $nouveauNom;
        $this->prenom = $nouveauPrenom;
        $this->adresse = $nouvelleAdresse;
    }
}
