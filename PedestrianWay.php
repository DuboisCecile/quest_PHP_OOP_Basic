<?php

require_once 'HighWay.php';

class PedestrianWay extends HighWay
{
    public function addVehicle(object $vehicle): PedestrianWay
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
        return $this;
    }
}
