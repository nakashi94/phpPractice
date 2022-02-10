<?php

declare(strict_types=1);

class Human
{
    const MAX_HITPOINT = 100;
    private $name = "kaito";
    private $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 30;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): void
    {
        echo $this->name;
    }
}
