<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/WalkingAnimal.php';

class Cat extends WalkingAnimal
{
    public function bout()
    {
        echo "nyanya";
    }
}
