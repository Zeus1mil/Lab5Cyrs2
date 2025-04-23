<?php

namespace UserP4\Work5hard\Chocolate;

class Sweets
{
    public string $name;
    public string $chocolate;
    public array $toppings;

    public function __construct(string $name, string $chocolate, array $toppings)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }
    public function prepare(): void
    {
        echo "Началось создание снека: " . $this->name . PHP_EOL;
        echo "Добавляем шоколад: " . $this->chocolate . PHP_EOL;
        echo "Добавлены начинки: " . implode(separator: ",", array: $this->toppings) . PHP_EOL;
    }
    public function cut(): void
    {
        echo "Эта шоколадка нарезана кубиками." . PHP_EOL;
    }
}
