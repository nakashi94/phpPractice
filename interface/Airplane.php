<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Flyable.php';

class Airplane implements Flyable
{
    public const number = 1;

    public function fly(): void
    {
        echo "I can fly.", PHP_EOL;
    }
}
