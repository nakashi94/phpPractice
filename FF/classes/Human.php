<?php

declare(strict_types=1);

class Human
{
    const MAX_HITPOINT = 100;
    private $name;
    private $hitPoint = 100;
    private $attackPoint = 20;

    public function __construct(string $name, int $hitPoint = 100, int $attackPoint = 20)
    {
        $this->name = $name;
        $this->hitPoint = $hitPoint;
        $this->attackPoint = $attackPoint;
    }
    public function doAttack($enemies)
    {
        if ($this->getHitPoint() <= 0) {
            return false;
        }

        $enemyIndex = rand(0, count($enemies) - 1);
        $enemy = $enemies[$enemyIndex];

        echo "『" . $this->getName() . "』の攻撃！ \n";
        echo "【" . $enemy->getName() . "】に" . $this->attackPoint . "のダメージ！ \n";
        $enemy->tookDamage($this->attackPoint);
    }

    public function tookDamage($damage): void
    {
        $this->hitPoint -= $damage;
        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }

    public function recoveryDamage($heal, $target)
    {
        $this->hitPoint += $heal;
        if ($this->hitPoint > $target::MAX_HITPOINT) {
            $this->hitPoint = $target::MAX_HITPOINT;
        }
    }

    public function reconeryDamage($heal, $target)
    {
        $this->hitPoint += $heal;
        if ($this->hitPoint > $target::MAX_HITPOINT) {
            $this->hitPoint = $target::MAX_HITPOIN;
        }
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
}
