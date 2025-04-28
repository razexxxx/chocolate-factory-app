<?php

namespace ChocolateFactoryApp\Factories;

use ChocolateFactoryLib\ChocolateFactory;
use ChocolateFactoryLib\Snack;
use ChocolateFactoryApp\Snacks\ChocolateBar;
use ChocolateFactoryApp\Snacks\ChocolateCube;
use ChocolateFactoryApp\Snacks\ChocolateTile;

class AppChocolateFactory extends ChocolateFactory
{
    protected function createSnack(string $type): Snack
    {
        return match (strtolower($type)) {
            'bar' => new ChocolateBar('Chocolate Bar', 'Молочный шоколад', ['Орехи', 'Карамель']),
            'cube' => new ChocolateCube('Chocolate Cube', 'Темный шоколад', ['Изюм']),
            'tile' => new ChocolateTile('Chocolate Tile', 'Белый шоколад', ['Кокос', 'Кранч']),
            default => throw new \InvalidArgumentException("Неизвестный тип снека: $type"),
        };
    }
}
