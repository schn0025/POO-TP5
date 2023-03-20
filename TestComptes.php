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
$courant3 = new Courant("terrible", 10 , -50, 0);
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
$livret1 = new Livret("Lagaffe" , 50408);
$livret2 = new Livret("Dupont" , 50409 , 1500);
$livret3 = new Livret("terrible", 10 , 100, 2);
var_dump($livret1);
var_dump($livret2);
var_dump($livret3);

//question 13
echo "\nquestion 13\n";
$livret2->effectuerRetrait(10);
$livret3->effectuerRetrait(200);

//question 14
echo "\nquestion 14\n";
var_dump($livret3);
$livret3->priseInterets();
var_dump($livret3);

//question 15
echo "\nquestion 15\n";
echo $livret3;

//question 16
echo "\nquestion 16\n";
$compte = new Compte("Léo", 5240, -10);
$livretA = new Livret("Arthur", 5241, 500, 2.5);
$compteCourant = new Courant("mnm",5242,-1500, -2000);
$livretA->priseInterets();
echo "\n",$livretA,"\n", $compte,"\n", $compteCourant;
// depot sur les compte
$compte->effectuerDepot(1000);
$livretA->effectuerDepot(100);
$compteCourant->effectuerDepot(500);
echo "\n",$livretA,"\n", $compte,"\n", $compteCourant;
//retrait sur les compt
$compte->effectuerRetrait(50);
$livretA->effectuerRetrait(100);
$compteCourant->effectuerRetrait(1001);
echo "\n",$livretA,"\n", $compte,"\n", $compteCourant;
$livretA->priseInterets();
echo $livretA;

//question 17
echo "\nquestion 17\n";
echo "\n",$livretA,"\n", $compte,"\n", $compteCourant;
$livretA->effectuerVirement($compteCourant, 500);
$compteCourant->effectuerVirement($compte, 2000);
$compte->effectuerVirement($livretA, 600);
echo "\n",$livretA,"\n", $compte,"\n", $compteCourant;
