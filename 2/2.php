<?php

require_once 'Rectangle.php';

function runRectangleDemo(): void
{
    try {
        $rectangle = new Rectangle(5.5, 3.2);

        echo "Площадь прямоугольника: " . $rectangle->getArea() . "\n";
        echo "Периметр прямоугольника: " . $rectangle->getPerimeter() . "\n";
    } catch (InvalidArgumentException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}

runRectangleDemo();
