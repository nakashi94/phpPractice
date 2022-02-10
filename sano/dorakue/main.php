<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/class/Human.php';
require_once dirname(__FILE__) . '/class/Monster.php';

$human = new Human();

$human->setName("Kaito");
$human->getName();

$slime = new Monster();
echo $slime->attackPoint;
$slime->setAttackPoint(100);
echo $slime->attackPoint;
