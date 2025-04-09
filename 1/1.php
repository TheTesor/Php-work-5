<?php

require_once 'Car.php';

function runCarDemo(): void
{
    $car = new Car("BMW", "X5", 2020, 50000);

    echo $car->getInfo() . "\n";

    $car->drive(1500);

    echo "Обновленный пробег: " . $car->getMileage() . " км\n";
}

runCarDemo();
