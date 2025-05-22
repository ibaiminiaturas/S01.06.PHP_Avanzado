<!--Sprint 1. Chapter 6. Exercise 3

Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)
-->

<?php

class Spider
{
    private $legs;

    public function __construct(int $legs)
    {
        $this->legs = $legs;
    }
    public function __toString(): string
    {
        return "I am  a Spider with : " . $this->legs . " legs";
    }

    public function __debugInfo(): array
    {
        return [
            'Class' => get_class($this),
            'Legs' => $this->legs,
            'Author' => "Ibai"
        ];
    }

}

$spider1 = new Spider(8);
$spider2 = new Spider(4);
echo $spider1 . PHP_EOL;
echo $spider2 . PHP_EOL;


echo var_dump($spider2) . PHP_EOL;

?>