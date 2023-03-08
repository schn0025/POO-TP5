<?php
// Schneider Arthur
declare(strict_types = 1);

class Lodgement{
    private float $surface;
    private string $type;
    private float $meterPrice;
    /**
     * __construct initialise l'objet Lodgement en passent les valeur de
     * sur a surface, type a type et prixM a meterPrice
     *
     * @param float $sur surface du Lodgement
     * @param string $type type du Lodgement
     * @param float $prixM prix au metre du Lodgement
     */
    public function __construct(float $sur, string $type, float $prixM){
        $this->surface = $sur;
        $this->type = $type;
        $this->meterPrice = $prixM;
    }
    /**
     * getPrixM2 est un acceseur de l'attribut meterPrice, il permet d'avoir acces en lectur a ce dernier
     *
     * @return float le prix au m²
     */
    public function getPrixM2(): float{
        return $this->meterPrice ;
    }
    /**
     * setPrixM2 est un modificateur de meterPrice, il permet de donner une noivel valeur
     * newPrix a meterPrice
     *
     * @param float $newPrix nouveau prix au m²
     * @return void
     */
    public function setPrixM2(float $newPrix){
        $this->meterPrice = $newPrix;
    }
    /**
     * __toString permet l'afichage en chaine de caractere ci il doit etre interpreter en tent que tel
     *
     * @return string la chaine de caractere a afficher
     */
    public function __toString(): string{
        $rep = "Surface : $this->surface \nType : $this->type\nPrix du m : $this->meterPrice";
        return $rep;
    }
    /**
     * getPrice permet de conetre le prix d'un logement, return ce prix
     *
     * @return float prix du logement
     */
    public function getPrice():float{
        return $this->surface * $this->meterPrice;
    }
}