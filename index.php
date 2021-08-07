<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle("yellow", 1, "manual");
$tornado = new Bicycle("black");
$tornado->forward();

$twingo = new Car("orange", 4, "diesel");
var_dump($twingo);
echo $twingo->start();
echo '<br> Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->forward();
echo '<br> Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();
