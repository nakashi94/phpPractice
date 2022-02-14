<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/WalkingAnimal.php';

class Dog extends WalkingAnimal
{
    public $name = "pomu";
    public function bout()
    {
        echo "wanwan";
    }
}
