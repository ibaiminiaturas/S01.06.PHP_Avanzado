<!--Sprint 1. Chapter 6. Level 2. Exercise 2. 
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima).

-->

<?php

require_once __DIR__ . "\Turbo.php";


enum FuelType {
    case GASOLINE;
    case DIESEL;
    case ELECTRIC;
    case H2O;
    case GARBAGE;
}

class Car {
    private string $brand;
    private string $licensePlate;
    private FuelType $fuelType;
    private int $maxSpeed;
    
    use Turbo;

    public function __construct(string $brand, string $licensePlate, FuelType $fuelType, int $maxSpeed) {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }
}
?>