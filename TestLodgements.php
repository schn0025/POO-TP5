<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Lodgement.php";

//fonction d'autre ex
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}

//question 2
echo "\n    question 2\n";
$log = new Lodgement(46.7,"T2", 6805);
var_dump($log);

//question 3
echo "\n    question 3\n";
echo $log->getPrixM2(),"\n";
$log->setPrixM2(10);
var_dump($log);

//question 4
echo "\n    question 4\n";
echo "$log \n";

//question 5
echo "\n    question 5\n";
$clone = clone $log;
echo "$clone\n";
