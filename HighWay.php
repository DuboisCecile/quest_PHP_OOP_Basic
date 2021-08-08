<?php

abstract class Highway
{

    protected array $currentVehicles = [];

    public function __construct(string $nbLane, int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        $this->nbLane = $nbLane;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    abstract public function addVehicle(object $vehicle);
}
