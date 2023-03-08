<?php
// Schneider Arthur
declare(strict_types = 1);

require_once "Shape.php";

class Rectangle extends Shape {

    private float $edge1 ; 
    private float $edge2 ; 
    /**
     * __construct est le constructeur de rectangle, il initialiser edge1 a a1 et edge2 a a2
     * il deffinit egalement le parent du nouveau rectangle.
     *
     * @param float $a1 longueur du coter edge1
     * @param float $a2 longueur du coter edge2
     */
    public function __construct (float $a1, float $a2)
    {
        parent::__construct(4);
        $this->edge1=$a1;
        $this->edge2=$a2;
        echo "Rectangle ( $a1 , $a2 )\n";
    }
    /**
     * print permet d'afficher les info du rectangle sous la forme de string
     * lorce qu'il est utiliser en character
     *
     * @return void
     */
    public function print () : void
    {
        parent::print();
        echo "Arete1 : {$this->edge1}\n";
        echo "Arete2 : {$this->edge2}\n";
    }   
}

