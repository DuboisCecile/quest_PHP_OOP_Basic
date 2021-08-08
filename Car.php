<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start(): string
    {
        if ($this->hasParkBrake) {
            throw new Exception("You forgot to set the brake off!");
        }
        return "Let's start !";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function changeWheel(): string
    {
        return "You know that you have, somewhere, a spare wheel, isn't it ? Figure out what you can do with it !!!";
    }

    public function setParkBrake(): bool
    {
        $this->hasParkBrake = !$this->hasParkBrake;
        return $this->hasParkBrake;
    }
}
