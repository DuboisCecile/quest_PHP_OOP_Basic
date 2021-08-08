<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck('blue', 2, 'fuel', 30000);
$skate = new Skateboard('purple', 1);

var_dump($car);
echo ($car->switchOn());
var_dump($car);

var_dump($bicycle);
echo ($bicycle->switchOn());
var_dump($bicycle);
$bicycle->setCurrentSpeed(15);
echo ($bicycle->switchOn());
var_dump($bicycle);
