<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function changeWheel(): string
    {
        return "Use your tools and don't get your fingers caught in the spokes of the bike...";
    }
    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10)
            $this->switched = true;
        else
            $this->switched = false;
        return $this->switched;
    }

    public function switchOff(): bool
    {
        $this->switched = false;
        return $this->switched;
    }
}
