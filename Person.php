<?php

class Person
{
    public string $lastname;
    public string $firstname;
    public string $address;
    public string $birthYear;

    public function showInfo(): string
    {
        return "$this->firstname $this->lastname est né en $this->birthYear et habite à $this->address";
    }

    public function changeAdresse($nouvelleAdresse): void
    {
        $this->address = $nouvelleAdresse;
    }

    public function age(): int
    {
        return date("Y") - $this->birthYear;
    }
}
