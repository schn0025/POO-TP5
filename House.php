<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Lodgement.php";

class House extends Lodgement{
    private float $gardenArea;
    /** 
     * __construct initialise l'objet Lodgement en passent les valeur de
     * sur a surface, type a type et prixM a meterPrice puis 
     * initialise l'objet House en passent la valeur de $gardenArea a celle de
     * $gard passer en para
     * @param float $sur surface du Lodgement
     * @param string $type type du Lodgement
     * @param float $prixM prix au metre du Lodgement
     * @param float $gard surface du jardin
     */
    public function __construct(float $sur, string $type, float $prixM, float $gard){
        parent::__construct($sur, $type, $prixM);
        $this->gardenArea = $gard;
    }
    public function getPrice(): float{
        $prix = parent::getPrice();
        $prix += $this->gardenArea * (parent::getPrixM2()*1.10);
        return $prix;
    }
}