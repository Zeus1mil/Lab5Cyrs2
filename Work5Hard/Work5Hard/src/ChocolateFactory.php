<?php

namespace UserP4\Work5hard\Chocolate;

use UserP4\Work5hard\Chocolate\Sweets;

class ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
    }

    public function createSnack(string $type): Sweets
    {
        return new Sweets(name: "", chocolate: "", toppings: [""]);
    }
}
