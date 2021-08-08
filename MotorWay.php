<?php

require_once 'HighWay.php';

class MotorWay extends HighWay
{
    public function addVehicle(object $vehicle): MotorWay
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
        }
        return $this;
    }
}
