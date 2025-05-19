<!--Sprint 1. Chapter 6. Exercise 2

Fes un programa que faci servir almenys un parell de constants màgiques.
-->

<?php

echo "Esta linea del script es la linea numero: " . __LINE__ . "." . PHP_EOL;

echo "Este script esta en  " . __DIR__ . "." . PHP_EOL;

$route = __DIR__ . "\\";

echo "Este script se llama   " . str_replace($route, '', __FILE__) . "." . PHP_EOL;

?>