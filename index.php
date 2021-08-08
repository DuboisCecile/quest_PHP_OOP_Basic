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

$motorWay = new MotorWay(4, 130);
$motorWay->addVehicle($bicycle);
$motorWay->addVehicle($car);
$motorWay->addVehicle($truck);
$motorWay->addVehicle($skate);
var_dump($motorWay);


$pedestrianWay = new PedestrianWay(4, 130);
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($skate);
var_dump($pedestrianWay);

$residentialWay = new ResidentialWay(4, 130);
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($skate);
var_dump($residentialWay);
