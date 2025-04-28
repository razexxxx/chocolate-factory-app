<?php

namespace ChocolateFactoryApp\Snacks;

use ChocolateFactoryLib\Snack;

class ChocolateCube extends Snack
{
    public function cut(): void
    {
        echo "Режем шоколад кубиками.\n";
    }
}
