<?php

declare(strict_types=1);

class Lives
{
    // setProperty
    private $name;
    private $hitPoint;
    private $attackPoint;

    // setMethod
    public function __construct(string $name, int $hitPoint, int $attackPoint)
    {
        $this->name = $name;
        $this->hitPoint = $hitPoint;
        $this->attackPoint = $attackPoint;
    }

    public function setHitPoint(int $hitPoint): void
    {
        $this->hitPoint = $hitPoint;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHitPoint(): int
    {
        return $this->hitPoint;
    }

    public function getAttackPoint(): int
    {
        return $this->attackPoint;
    }

    public function attack(object $target)
    {
        echo $this->getName() . "は攻撃した！　\n";
        echo $target->getName() . "は" . $this->attackPoint . "のダメージを受けた。 \n";
    }

    public function calDamage(object $actor): int
    {
        return $this->getHitPoint() - $actor->getAttackPoint();
    }
}
