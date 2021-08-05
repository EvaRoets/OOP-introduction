<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "exercise_1_classes.php";
require "exercise_2_extending.php";
require "exercise_3_private.php";
require "exercise_4_protected.php";
//require "exercise_5_public.php";
//require "exercise_6_const.php";
//require "exercise_7_static.php";

echo "/* EXERCISE 1 */ </br>";
$cola = new Beverages("black", 2);
$cola->getInfo();
$cola->temperature;


echo "/* EXERCISE 2 */</br>";
$duvel = new Beer ("blond", 3.5, "cold", "Duvel", 8.5); // give the values
$duvel->getAlcoholPercentage(); // execute function, but with return inside function, you also need echo
echo "{$duvel->getAlcoholPercentage()}"; // 2nd way to display %, so either echo inside function or echo outside function when value is called
$duvel->color;
$duvel->getInfo();

echo "/* EXERCISE 3 */</br>";
$duvel = new StrongBeer ("blond", 3.5, "cold", "Duvel", 8.5); // give the values
$duvel->getAlcoholPercentage();
$duvel->getName();
$duvel->setColor("light");
$duvel->getBeerInfo();

echo "/* EXERCISE 4 */ </br>";
$duvel->getAlcoholPercentage();
$duvel->getName();
