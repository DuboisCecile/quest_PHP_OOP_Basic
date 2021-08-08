<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    public function addVehicle(object $vehicle): ResidentialWay
    {
        $this->currentVehicles[] = $vehicle;
        return $this;
    }
}
