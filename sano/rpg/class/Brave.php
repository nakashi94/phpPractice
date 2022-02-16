<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class Brave extends Human
{
    public function attack(): void
    {
        $isSkill = false;
        if (rand(1, 4) == 1) {
            echo $this->getName() . "はギガブレイクを放った！ \n";
            $isSkill = true;
        } else {
            Lives::attack();
        }
    }
}
