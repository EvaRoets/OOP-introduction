<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beer extends Beverages
{
    private string $name;
    private float $alcoholPercentage;
    const BARNAME = "Het Vervolg";

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        echo "{$this->alcoholPercentage}</br>";
    }
    public function getConstant()
    {
        echo self::BARNAME;
    }

}

/* EXERCISE 6
Copy the classes of exercise 2.
change the properties to private.
Make a const barname with the value 'Het Vervolg'.
print the constant on the screen

create a function in beverage and use the constant.
Do the same in the beer class
print the output of these functions on the screen.
Make sure that every print is on a new line.
Use typehinting everywhere!
*/