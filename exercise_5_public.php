<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class ColdBeverages
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function setPrice($price)
    {
        $this->price = $price;
        echo "The new price is {$this->price} euro. </br>";
    }
    public function getInfo()
    {
        echo "This beverage is {$this->temperature} and {$this->color}. </br></br>";
    }

}

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/