<?php

require __DIR__ . '/../vendor/autoload.php';

use ChocolateFactoryApp\Factories\AppChocolateFactory;

$factory = new AppChocolateFactory();
$factory->orderSnack('bar');
$factory->orderSnack('cube');
$factory->orderSnack('tile');
