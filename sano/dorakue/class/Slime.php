<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Monster.php';

class Slime extends Monster
{
    public function magic()
    {
        echo "mahou";
    }
}
