<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

// var_dump(Car::ALLOWED_ENERGIES);

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

$truck = new Truck('blue', 2, 'fuel', 30000);
echo $truck->forward();
echo "<br/>";
echo $truck->brake();
echo "<br/>";
var_dump($truck);
echo "<br/>";
echo $truck->checkIfFull();
$truck->setLoadingLevel(20000);
echo "<br/>";
echo $truck->checkIfFull();
$truck->setLoadingLevel(30000);
echo "<br/>";
echo $truck->checkIfFull();

/* 
Go !
Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! Brake !!! I'm stopped !
C:\xampp\htdocs\quetes_php_poo\index.php:22:
object(Truck)[1]
  private string 'energy' => string 'fuel' (length=4)
  private int 'energyLevel' => *uninitialized*
  private int 'loadingLevel' => int 0
  protected string 'color' => string 'blue' (length=4)
  protected int 'currentSpeed' => int 0
  protected int 'nbSeats' => int 2
  protected int 'nbWheels' => *uninitialized*
  public 'loadingCapacity' => int 30000

in filling
in filling
full
*/
