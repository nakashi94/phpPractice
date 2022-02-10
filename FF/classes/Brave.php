<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class Brave extends Human
{
    const MAX_HITPOINT = 120;
    public $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 30;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }

    public function doAttack($enemy): bool
    {
        if (rand(1, 3) === 1) {
            echo "『" . $this->getName() . "』のスキルが発動した！ \n";
            echo "『ぜんりょくぎり』！！ \n";
            echo $enemy->getName() . " に " . $this->attackPoint * 1.5 . "のダメージ！ \n";
            $enemy->tookDamage($this->attackPoint * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}
