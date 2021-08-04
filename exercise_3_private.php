<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class StrongBeer extends Beverages
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature = "cold");
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        echo "Alcohol percentage {$this->alcoholPercentage}%</br>";
    }

    public function getName()
    {
        echo "Name: {$this->name}</br>";
    }

    public function setColor($color)
    {
        $this->color = $color;
        echo "Color: {$this->color}</br>";

    }

    private function beerInfo()
    {
        echo "Hi I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color. </br></br>";
    }

    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}


/* EXERCISE 3
Copy the code of exercise 2 to here
delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen
after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/