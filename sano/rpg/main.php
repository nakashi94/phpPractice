<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/class/Human.php';
require_once dirname(__FILE__) . '/class/Monster.php';

// インスタンス化
$human = new Human("Kaito", 100, 30);
$enemy = new Monster("Slime", 50, 10);

$human->Attack();
echo $enemy->getName() . "は" . $human->getAttackPoint() . "のダメージを受けた。 \n";
$enemy->setHitPoint($enemy->calDamage($human));
echo $enemy->getHitPoint() . "\n";
$enemy->Attack();
echo $human->getName() . "は" . $enemy->getAttackPoint() . "のダメージを受けた。 \n";
