<?php
// Schneider Arthur
declare(strict_types = 1);

class Shape 
{
    protected int $vertices; 
    /**
     * __construct est le constructeur des formes, il initialiser le nombre de vertices au nombre de sommets
     * passer en parametre
     *
     * @param integer $sommets sommet de la forme
     */
    public function __construct (int $sommets)
    {
        $this->vertices = $sommets ;
        echo "Shape ( $sommets ) \n"; 
    }
    /**
     * print permet d'afficher les info de la figure sous la forme de string
     * lorce qu'elle est utiliser en character
     *
     * @return void
     */
    public function print () : void
    {
        echo "Sommets : $this->vertices\n";
    }

}

