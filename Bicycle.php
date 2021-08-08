<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function changeWheel(): string
    {
        return "Use your tools and don't get your fingers caught in the spokes of the bike...";
    }
}
