<?php
class Cat extends Animal
{
    private string $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, "Кошка");
        $this->color = $color;
    }

    public function makeSound(): void
    {
        echo "{$this->name} говорит: Мяу!\n";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Цвет: {$this->color}";
    }
}