<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class StrongestBeer extends Beverages
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature = "cold");
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        echo "Alcohol percentage: {$this->alcoholPercentage}%</br>";
    }

    public function getName()
    {
        echo "Name: {$this->name}</br>";
    }
}

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPE HINTING EVERYWHERE!
*/