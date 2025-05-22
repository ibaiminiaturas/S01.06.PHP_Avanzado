<!--Sprint 1. Chapter 6. Level 2. Exercise 2. 
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima).

-->
<?php

require_once __DIR__  . "\Car.php";

$car = new Car("Toyota", "1234ABC", FuelType::GASOLINE, 180);

$car->boost();

?>