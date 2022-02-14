<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Lives.php';

class Human extends Lives
{
    const MAX_HITPOINT = 100;

    public function __construct(string $name, int $hitPoint = 100, int $attackPoint = 20, int $intelligence = 0)
    {
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
    }
}
