<?php

require_once 'Vehicle.php';

class Skateboard extends Vehicle
{
    public function changeWheel(): string
    {
        return "Buy a new skate !";
    }
}
