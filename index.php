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

try {
    var_dump($car);
    $car->start();
} catch (Exception $e) {
    var_dump($e);
    $car->setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}

var_dump($car);
