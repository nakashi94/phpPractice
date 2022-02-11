<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Lives.php';

class Enemy extends Lives
{
    const MAX_HITPOINT = 50;

    public function __construct(string $name, int $attackPoint)
    {
        $hitPoint = 50;
        $intelligence = 0;
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
    }
}
