<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Shape.php";
require_once "Rectangle.php";
require_once "Square.php";

// Question 1
echo "\n question 1 \n";
$figure1 = new Shape(6);
var_dump($figure1);

// Question 3
echo "\n question 3 \n";
$rectangle1 = new Rectangle(25,63.5);
var_dump($rectangle1);

// Question 4
echo "\n question 4 \n";
$rectangle1->print();

// Question 5
echo "\n question 5 \n";
$carre1 = new square(14);
var_dump($carre1);