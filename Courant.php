<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Compte.php";

class Courant extends Compte{
    private float $decouvert;
    /**
     * __construct initialise l'objet compte en passent les attribut numero, titulaire
     * et solde et du decouvert au valeur passer en parametre, ci il n'y a pas de valeur pour solde,
     * celui ci est a 0 par default il en est de même pour le decouvert
     *
     * @param string $titulaire nom du titulaire
     * @param int $num num du compte
     * @param float $solde solde du compte
     * @param integer $dec decouvert posible du compt courant
     */
    public function __construct(string $titulaire, int $num, float $solde = 0, float $dec = 0){
        parent::__construct($titulaire, $num, $solde);
        if($solde < $dec){
            $this->decouvert = $solde;
            echo "erreur le decouvert et passer a $solde car le sole dest inferieur au decouvert.";
        }
        else{
            $this->decouvert = $dec;
        }
    }
    /**
     * getDecouvert est un accesseur de decouvert il renvois la valeur de decouvert
     *
     * @return float la valeur du decouvert
     */
    public function getDecouvert():float{
        return $this->decouvert;
    }
    /**
     * setDecouvert permet de definir un nouveaux decouvert
     *
     * @param float $newDec nouvelle valeur du decouvert
     */
    public function setDecouvert(float $newDec){
        $this->decouvert = $newDec;
    }
    /**
     * effectuerRetrait permet de retier un somme donner du solde du compt, la fonction renvois
     * vrais ci le prélevement a ete efectuer c'est a dire ci l'eventuel nouveaux solde et superieur
     * au decouvert
     *
     * @param float $val valeur du retret demander
     * @return boolean vrais si le retrait est passer false sinon
     */
    public function effectuerRetrait(float $val): bool{
        if(parent::getSolde() - $val >= $this->decouvert){
            parent::effectuerRetrait($val);
            $effect = True;
        }
        else{
            $effect = false;
        }
        return $effect;
    }
    /**
     * __toString permet de donner un facon d'interpréter l'objet compt lor d'un appel en tant que charactaire
     *
     * @return string chaine de charactaire a afficher
     */
    public function __toString(): string {
        $rep = parent::__toString();
        $rep .= "decouvert : $this->decouvert\n";
        return $rep;
    }
}