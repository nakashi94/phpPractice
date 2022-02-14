<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Dog.php';
require_once dirname(__FILE__) . '/Cat.php';

// $animal = new WalkingAnimal;

// echo $animal->name, PHP_EOL;
// echo $animal->show();

$dog = new Dog();
echo $dog->name;

$cat = new Cat();
echo $cat->bout();
