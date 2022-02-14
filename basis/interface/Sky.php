<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Flyable.php';

class Sky
{
    public function draw(Flyable $flyable): void
    {
        $flyable->fly();
    }
}
