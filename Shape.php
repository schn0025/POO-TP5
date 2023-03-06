<?php
// Schneider Arthur
declare(strict_types = 1);

class Shape 
{
    protected int $vertices; 

    public function __construct (int $sommets)
    {
        $this->vertices = $sommets ;
        echo "Shape ( $sommets ) \n"; 
    }

    public function print () : void
    {
        echo "Sommets : $this->vertices\n";
    }

}

