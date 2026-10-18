<?php
// Auteur : salma ejnnour
// Objectif : Tester les variables PHP
// Date : 18/10/2026

echo "Hello PHP";

$x = 10;
$_x = 20;
// $2x : invalide, un nom de variable ne peut pas commencer par un chiffre.
// $x-y : invalide comme nom de variable, le tiret est un opérateur.
// $Prix_HT : valide.
// $prix ht : invalide, les espaces sont interdits.
// $état : valide en PHP 8 avec un identifiant UTF-8.

$Prix_HT = 100;
$état = "Maroc";

$a = 5;
$A = 10;

echo "<br>";
echo $x;
echo "<br>";
echo $_x;
echo "<br>";
echo $Prix_HT;
echo "<br>";
echo $état;
echo "<br>";
echo $a;
echo "<br>";
echo $A;
?>