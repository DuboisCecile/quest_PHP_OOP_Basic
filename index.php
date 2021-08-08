<?php

require_once 'Person.php';

$person = new Person;
$person->lastname = "Doe";
$person->firstname = "John";
$person->birthYear = 1965;
$person->address = "502 Main Street, New York";

echo ($person->showInfo());
echo "<br/>";
echo ($person->age());
echo ($person->changeAdresse("Somewhere else"));
echo "<br/>";
echo ($person->showInfo());
