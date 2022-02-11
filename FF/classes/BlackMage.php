<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class BlackMage extends Human
{
    const MAX_HITPOINT = 80;
    private $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 10;
    private $intelligence = 30;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint, $this->intelligence);
    }

    public function doAttack($enemies)
    {
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }
        $enemy = $this->selectTarget($enemies);
        if (rand(1, 2) === 1) {
            echo "『" . $this->getName() . "』のスキルが発動した！ \n";
            echo "『ファイア』！！ \n";
            echo $enemy->getName() . " に " . $this->intelligence * 1.5 . "のダメージ！ \n";

            $enemy->tookDamage($this->intelligence * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}
