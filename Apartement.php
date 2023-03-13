<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Lodgement.php";

class apartement extends Lodgement{
    private int $floor;
    private bool $lift;
    /**
     * __construct initialise l'objet Lodgement en passent les valeur de
     * sur a surface, type a type et prixM a meterPrice puis 
     * initialise l'objet apartement en passent la valeur de floor a celle passer en parametre
     * ainsi que la valeur de lift a celle passez en para
     *
     * @param float $sur surface du Lodgement
     * @param string $type type du Lodgement
     * @param float $prixM prix au metre du Lodgement
     * @param int $floor etage de l'appartemment
     * @param bool $lift bool qui dit ci il y a un ascenseur ou non
     */
    public function __construct(float $sur, string $type, float $prixM, int $floor, bool $lift){
        parent::__construct($sur, $type, $prixM);
        $this->floor = $floor;
        $this->lift = $lift;
    }
    /**
     * __toString permet l'afichage en chaine de caractere ci il doit etre interpreter en tent que tel
     *
     * @return string la chaine de caractere a afficher
     */
    public function __toString() : string{
        $rep = "";
        if($this->lift){
            $repAsc = "oui";
        }
        else{
            $repAsc = "non";
        }
        $rep .= parent::__toString();
        $rep .= "\nEtage : $this->floor\nAscenseur : $repAsc\n" ;
        return $rep;
    }
    public function getPrice(): float{
        $prix = parent::getPrice();
        if($this->floor == 0){
            $prix *= 0.85;
        }
        elseif($this->floor >= 2){
            if($this->lift){
                $prix = $prix + (0.05 * $this->floor) * $prix;
            }
            else{
                $prix = $prix - (0.05 * $this->floor) * $prix;
            }
        }
        return $prix;
    }
}