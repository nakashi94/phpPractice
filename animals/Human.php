<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class Human extends Human
{
    public function fly(): void
    {
        echo "I am walking.";
    }
}
