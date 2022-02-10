<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/classes/Enemy.php';
require_once dirname(__FILE__) . '/classes/Brave.php';

$tiida = new Brave("ティーダ");
$goblin = new Enemy("ゴブリン");

echo $tiida->getName(), $tiida->getHitPoint(), $tiida->getAttackPoint();

$turn = 1;

while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {
    echo "*** $turn ターン目 *** \n\n";

    echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
    echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n";
    echo "\n";

    $tiida->doAttack($goblin);
    echo "\n";
    $goblin->doAttack($tiida);
    echo "\n";

    $turn++;
}

echo "戦闘終了 \n\n";
echo $tiida->getName() . "　：　" . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";
