<?php
require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Cat.php';
require_once __DIR__ . '/Zoo.php';


$dog1 = new Dog("Бобик", 3, "Немецкая овчарка");
$dog2 = new Dog("Шарик", 5, "Лабрадор");
$cat1 = new Cat("Мурка", 2, "Белый");
$cat2 = new Cat("Барсик", 4, "Черный");

$zoo = new Zoo();
$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);

$zoo->listAnimals();
$zoo->animalSounds();