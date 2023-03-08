<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Rectangle.php";


class Square extends Rectangle 
{
/**
 * __construct est le constructeur de square, il permet initialiser un square en definisant la longeur de ces cote
 * a a1. il deffinit aussi son parent.
 *
 * @param float $a1
 */
    public function __construct ( float $a1)
    {
        parent::__construct ($a1,$a1);	
        echo "Square ( $a1 )\n";
    }
}