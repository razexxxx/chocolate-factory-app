<?php

namespace ChocolateFactoryApp\Snacks;

use ChocolateFactoryLib\Snack;

class ChocolateTile extends Snack
{
    public function cut(): void
    {
        echo "Режем шоколад вертикальными кусочками.\n";
    }
}
