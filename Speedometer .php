<?php

class Speedometer
{
    public const KM_TO_MILES_FACTOR = 0.621371;
    public const MILES_TO_KM_FACTOR = 1.60934;

    public static function kmToMiles(int $km): float
    {
        return $km * self::KM_TO_MILES_FACTOR;
    }

    public static function milesToKm(int $miles): float
    {
        return $miles * self::MILES_TO_KM_FACTOR;
    }
}
