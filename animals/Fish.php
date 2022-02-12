<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Human.php';

class Fish extends Human
{
    public function swim(): void
    {
        echo "I am swiming.";
    }
}
