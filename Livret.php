<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Compte.php";

class Livret extends Compte{
    private float $taux;
    private float $soldeMin;
    /**
     * __construct est le constructeur de l'objet Livret, il crée un objet parent Compte
     * et donne un taux et un solde min a l'objet Livret. ci le solde et le taux ne sont pas def, il sprenne pour
     * valeur 0
     *
     * @param string $titulaire nom du titulaire
     * @param integer $num numero du compte
     * @param float $solde solde du compte
     * @param float $taux taux du livret
     */
    public function __construct(string $titulaire, int $num, float $solde = 0,float $taux = 0){
        parent::__construct($titulaire, $num, $solde);
        $this->taux = $taux;
        $this->soldeMin = $solde;
    }
    /**
     * effectuerRetrait permet si le solde est sup au montant demander d'effectuer
     * un retrait, il redefinit alors ci le solde est inferieur au montant min il redefinit
     * le montant min.
     *
     * @param float $mont montant a retirer du compte.
     * @return bool True si le retrait a ete effectuer, flase sinon.
     */
    public function effectuerRetrait(float $mont): bool{
        $rep = False;
        if($mont <= parent::getSolde()){
            parent::effectuerRetrait($mont);
            $this->soldeMin = parent::getSolde();
            $rep = True;
            if($this->soldeMin > parent::getSolde()){
                $this->soldeMin = parent::getSolde();
            }
        }
        return $rep;
    }
    /**
     * priseInterets permet de calculer la somme a ajouter au compte grace le taux et 
     * de l'ajouter au solde
     *
     */
    public function priseInterets(){
        $int = ($this->taux/100)*parent::getSolde();
        parent::effectuerDepot($int);
        $this->soldeMin = parent::getSolde();
    }
    /**
     * toString permet de donner un facon d'interpréter l'objet compt lor d'un appel en tant que charactaire
     *
     * @return string chaine de charactaire a afficher
     */
    public function __toString():string{
        $aff = parent::__toString();
        $aff .= 'taux : '. $this->taux. "\n" .'soldeMin : '.$this->soldeMin."\n";
        return $aff;
    }
}