<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Compte.php";
require_once "Courant.php";
require_once "Livret.php";



//question 2
echo "\nquestion 2\n";
$compte1 = new Compte ("Lagaffe" , 50408); //50408 est le num ́ero du compte
$compte2 = new Compte ("Dupont" , 50409 , 3000.);
var_dump($compte1);
var_dump($compte2);

//question 3
echo "\nquestion 3\n";
echo $compte1->getSolde(), "\n";
echo $compte2->getSolde(), "\n";

//question 4
echo "\nquestion 4\n";
echo $compte1, "\n";
echo $compte2;

//question 5
echo "\nquestion 5\n";
$compte1->effectuerDepot(100);
$compte2->effectuerRetrait(1);
echo $compte1, "\n";
echo $compte2;

//question 7
echo "\nquestion 7\n";
$courant1 = new Courant("Lagaffe" , 50408);
$courant2 = new Courant("Dupont" , 50409 , 3000, -500);
$courant3 = new Courant("terible", 10 , -50, 0);
var_dump($courant1);
var_dump($courant2);
var_dump($courant3);

//question 8
echo "\nquestion 8\n";
$courant3->setDecouvert(-10);
echo $courant3->getDecouvert(), "\n";

//question 9
echo "\nquestion 9\n";
$courant3->effectuerRetrait(1000);
$courant2->effectuerRetrait(1);

//question 10
echo "\nquestion 10\n";
echo "$courant1\n $courant2\n $courant3\n";

//question 12
echo "\nquestion 12\n";
