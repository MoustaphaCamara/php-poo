<?php

/**
 * Classe Car représentant le fonctionnement d'une voiture
 */
class Car
{
    // Création d'attributs pour la marque, la couleur, le nombre de portes et les kilométrages de la voiture
    // On peut les mettre privées car nous n'avons pas forcément l'envie d'y accéder directement en public, mais plutôt via les getters et setters en bas de page. Cela renforce la sécurité de l'application.
    private string $brand;
    private string $color;
    private int $nbDoors;
    private int $kmh = 0;

    /**
     * Notre constructeur récupère la marque, la couleur et le nombre de portes voulues et stocke les valeurs dans les attributs déclarés précédemment.
     * Cela permet de pouvoir réutiliser ces informations dans toute notre classe.
     * Ces informations sont passées en paramètre au moment de l'instanciation de la classe.
     * @param string $brand
     * @param string $color
     * @param int $nbDoors
     */
    public function __construct(string $brand, string $color, int $nbDoors)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->nbDoors = $nbDoors;
    }

    /**
     * Fonction pour faire accélérer notre voiture de 30km/h.
     * @return int
     */
    public function rouler (): int
    {
        return $this->kmh += 30;
    }

    /**
     * Fonction pour faire décélérer notre voiture de 30km/h.
     * @return int
     */
    public function freiner (): int
    {
        return $this->kmh -= 30;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return iny
     */
    public function getNbDoors(): int
    {
        return $this->nbDoors;
    }

    /**
     * @param int $nbDoors
     */
    public function setNbDoors(int $nbDoors): void
    {
        $this->nbDoors = $nbDoors;
    }

    /**
     * @return int
     */
    public function getKmh(): int
    {
        return $this->kmh;
    }

    /**
     * @param int $kmh
     */
    public function setKmh(int $kmh): void
    {
        $this->kmh = $kmh;
    }
}