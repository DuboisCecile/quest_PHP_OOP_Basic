<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Truck extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private int $loadingLevel = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->loadingCapacity = $loadingCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getLoadingLevel(): string
    {
        return $this->loadingLevel;
    }

    public function setLoadingLevel(string $loadingLevel): void
    {
        $this->loadingLevel = $loadingLevel;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function checkIfFull(): string
    {
        if ($this->loadingLevel < $this->loadingCapacity)
            $this->loadingStatus = "in filling";
        else $this->loadingStatus = "full";
        return $this->loadingStatus;
    }

    public function changeWheel(): string
    {
        return "RTFM !!!";
    }

    public function switchOn(): bool
    {
        $this->switched = true;
        return $this->switched;
    }

    public function switchOff(): bool
    {
        $this->switched = false;
        return $this->switched;
    }
}
