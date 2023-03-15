<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Compte.php";

class Livret extends Compte{
    private float $taux;
    private float $soldeMin;
    public function __construct(string $titulaire, int $num, float $solde = 0,float $taux = 0){
        parent::__construct($titulaire, $num, $solde);
        $this->taux = $taux;
        $this->soldeMin = $solde;
    }
}