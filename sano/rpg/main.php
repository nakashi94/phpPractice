<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/class/Brave.php';
require_once dirname(__FILE__) . '/class/Monster.php';

// インスタンス化
$human = new Brave("Kaito", 100, 30);
$enemy = new Monster("Slime", 50, 10);

$win_human = true;
$a;

while (true) {
    // 人間のターン
    $human->attack($enemy);
    $enemy->setHitPoint($enemy->calDamage($human));

    // 終了処理：敵の体力が0
    if ($enemy->getHitPoint() <= 0) {
        $win_human = true;
        break;
    }

    // 敵のターン
    $enemy->attack($human);

    $human->setHitPoint($human->calDamage($enemy));

    // 終了処理：味方の体力が0
    if ($human->getHitPoint() <= 0) {
        $win_human = false;
        break;
    }
}

if ($win_human) {
    echo "congratulation";
} else {
    echo "GAME OVER...";
}
