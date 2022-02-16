<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class Brave extends Human
{
    public function attack(object $target)
    {
        if (rand(1, 4) == 1) {
            echo $this->getName() . "はギガブレイクを放った！ \n";
            $skillAttack = $this->getAttackPoint() * 1.5;
            echo $target->getName() . "は" . $skillAttack . "のダメージを受けた。 \n";
        } else {
            Lives::attack($target);
        }
        // return true;
    }
}
