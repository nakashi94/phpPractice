<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class Brave extends Human
{
    public function doAttack($enemy): bool
    {
        if (rand(1, 3) === 1) {
            echo "『" . $this->name . "』のスキルが発動した！ \n";
            echo "『ぜんりょくぎり』！！ \n";
            echo $enemy->name . " に " . $this->attackPoint * 1.5 . "のダメージ！ \n";
            $enemy->tookDamage($this->attackPoint * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}
