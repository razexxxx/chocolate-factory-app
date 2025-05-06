<?php

namespace ChocolateFactoryApp\Snacks;

use ChocolateFactoryLib\Snack;

class ChocolateBar extends Snack
{
    public function cut(): void
    {
        echo "Нарезаем шоколадку плитками.\n";
    }
}
