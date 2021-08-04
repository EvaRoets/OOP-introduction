<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "exercise_1_classes.php";
//require "exercise_2_extending.php";
//require "exercise_3_private.php";
//require "exercise_4_protected.php";
//require "exercise_5_public.php";
//require "exercise_6_const.php";
//require "exercise_7_static.php";

$cola = new Beverages("black", 2);

$cola->getInfo();
$cola->temperature;


