<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Beverages
{
    public string $color;
    public float $price;
    public string $temperature = cold;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->temperature = $temperature;

    }

    public function getInfo()
    {
        echo "This beverage is {$this->temperature} and {$this->color}.";
    }
}

$cola = new Beverages("black", 2, "$this.temperature");

var_dump($cola);

/* EXERCISE 1
 the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
print the temperature on the screen.
USE TYPE HINTING EVERYWHERE!
*/