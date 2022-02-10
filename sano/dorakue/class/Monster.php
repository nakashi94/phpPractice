<?php

declare(strict_types=1);

class Monster
{
    const MAX_HITPOINT = 40;
    private $name;
    private $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 20;

    public function __construct(string $name = "slime", int $hitPoint = 100, int $attackPoint = 100)
    {
        $this->name = $name;
        $this->hitPoint = $hitPoint;
        $this->attackPoint = $attackPoint;
    }

    public function setAttackPoint(int $attackPoint): void
    {
        $this->attackPoint = $attackPoint;
    }
}
