<?php

declare(strict_types=1);

class Lives
{
    private $name;
    private $hitPoint;
    private $attackPoint;
    private $intelligence;

    public function __construct(string $name, int $hitPoint = 50, int $attackPoint = 10, int $intelligence)
    {
        $this->name = $name;
        $this->hitPoint = $hitPoint;
        $this->attackPoint = $attackPoint;
        $this->intelligence = $intelligence;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHitPoint(): int
    {
        $result = $this->hitPoint;
        if ($result < 0) {
            $result = 0;
        }
        return $result;
    }

    public function tookDamage(int $damage): void
    {
        $this->hitPoint -= $damage;
        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }

    public function recoveryDamage(int $heal, string $target): void
    {
        $this->hitPoint += $heal;
        if ($this->hitPoint > $target::MAX_HITPOIN) {
            $this->hitPoint = $target::MAX_HITPOINT;
        }
    }

    public function doAttack(object $targets)
    {
        if (!$this->isEnableAttack($targets)) {
            return false;
        }
        $target = $this->selectTarget($targets);

        echo "『" . $this->name . "』の攻撃！ \n";
        echo "【" . $target->getName() . "】に" . $this->attackPoint . "のダメージ！ \n";
        $target->tookDamage($this->attackPoint);
        return true;
    }

    public function isEnableAttack(object $targets): bool
    {
        if ($this->hitPoint <= 0) {
            return false;
        }

        foreach ($targets as $target) {
            if ($target->getHitPoint() > 0) {
                return true;
            }
        }
    }

    public function selectTarget(object $targets): object
    {
        $target = $targets[rand(0, count($targets) - 1)];
        while ($target->getHitPoint() <= 0) {
            $target = $targets[rand(0, count($targets) - 1)];
        }
        return $target;
    }
}
