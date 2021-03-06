<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class WhiteMage extends Human
{
    const MAX_HITPOINT = 80;
    private $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 10;
    private $intelligence = 30;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint, $this->intelligence);
    }

    public function doAttackWhiteMage($enemies, $members)
    {
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }
        if (rand(1, 2) === 1) {
            $member = $this->selectTarget($members);
            echo "『" . $this->getName() > "』のスキルが発動した！ \n";
            echo "『ケアル』！！ \n";
            echo $member->getName() . " のHPを " . $this->intelligence * 1.5 . "回復！ \n";

            $member->recoveryDamage($this->intelligence * 1.5, $member);
        } else {
            $enemy = $this->selectTarget($enemies);
            parent::doAttack($enemies);
        }
        return true;
    }
}
