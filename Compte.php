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
     * @param int $num num du compte
     * @param float $solde solde du compte
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
    /**
     * __toString permet de donner un facon d'interpréter l'objet compt lor d'un appel en tant que charactaire
     *
     * @return string chaine de charactaire a afficher
     */
    public function __toString():string{
        return "numero : $this->numero\ntitulaire : $this->titulaire\nsolde : $this->solde\n";
    }
    /**
     * effectuerRetrait permet de retier un somme donner du solde du compt, la fonction renvois
     * vrais ci le prélevement a ete efectuer ici elle le sera toujours
     *
     * @param float $montant somme a deduire du compte
     * @return boolean Vrais car l'operation s'efectu toujours.
     */
    public function effectuerRetrait(float $montant):bool{
        $this->solde -= $montant;
        echo "\n$this->numero \nRetrait \n$montant \n" ;
        return True;
    }
    /**
     * effectuerDepot permet d'ajouter une somme au solde du compte
     *
     * @param float $montant somme a ajouter
     */
    public function effectuerDepot(float $montant){
        $this->solde += $montant;
        echo "\n$this->numero \nDepot \n$montant \n" ;
    }
}