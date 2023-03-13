<?php
// Schneider Arthur
declare(strict_types = 1);

class Compte{
    private int $numero;
    private string $titulaire;
    private float $solde;
    /**
     * __construct initialise l'objet compte en passent les attribut numero, titulaire
     * et solde au valeur passer en parametre, ci il n'y a pas de valeur pour solde,
     * celui ci est a 0 par default
     *
     * @param string $titulaire nom du titulaire
     * @param int $num num du compt
     * @param float $solde solde du compt
     */
    public function __construct(string $titulaire, int $num, float $solde = 0){
        $this->titulaire = $titulaire;
        $this->numero = $num;
        $this->solde = $solde;
    }
    /**
     * getSolde est un acceseeur de Slode, il renvoi la valeur de Solde du compte
     */
    public function getSolde(): float{
        return $this->solde;
    }
}