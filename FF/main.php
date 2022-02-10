<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/classes/Enemy.php';
require_once dirname(__FILE__) . '/classes/Brave.php';
require_once dirname(__FILE__) . "/classes/BlackMage.php";
require_once dirname(__FILE__) . "/classes/WhiteMage.php";

$members = array();
$members[] = new Brave('ティーダ');
$members[] = new BlackMage('ユウナ');
$members[] = new WhiteMage('ルールー');

$enemies = array();
$enemies[] = new Enemy('ゴブリン', 20);
$enemies[] = new Enemy('ボム', 25);
$enemies[] = new Enemy('モルボル', 30);

$turn = 1;
$isFinishFlag = false;

while (!$isFinishFlag) {
    echo "*** $turn ターン目 *** \n\n";

    // show party's HP
    foreach ($members as $member) {
        echo $member->getName() . "　：　" . $member->getHitPOint() . "/" . $member::MAX_HITPOINT . "\n";
    }
    echo "\n";
    foreach ($enemies as $enemy) {
        echo $enemy->getName() . "　：　" . $enemy->getHitPOint() . "/" . $enemy::MAX_HITPOINT . "\n";
    }
    echo "\n";

    // attack
    foreach ($members as $member) {
        $enemyIndex = rand(0, count($enemies) - 1);
        $enemy = $enemies[$enemyIndex];
        // WhiteMageの場合、味方のオブジェクトも渡す
        if (get_class($member) == "WhiteMage") {
            $member->doAttackWhiteMage($enemy, $member);
        } else {
            $member->doAttack($enemy);
        }
        echo "\n";
    }
    echo "\n";

    foreach ($enemies as $enemy) {
        $memberIndex = rand(0, count($members) - 1);
        $member = $members[$memberIndex];
        $enemy->doAttack($member);
        echo "\n";
    }
    echo "\n";

    // 仲間の全滅チェック
    $deathCount = 0;
    foreach ($members as $member) {
        if ($member->hitPoint > 0) {
            $isFinishFlag = false;
            break;
        }
        $deathCount++;
    }

    if ($deathCount === count($members)) {
        $isFinishFlag = true;
        echo "GAME OVER ... \n\n";
        break;
    }

    // 敵の全滅チェック
    $deathCount = 0;
    foreach ($enemies as $enemy) {
        if ($enemy->getHitPoint() > 0) {
            $isFinishFlag = false;
            break;
        }
        $deathCount++;
    }

    if ($deathCount === count($enemies)) {
        $isFinishFlag = true;
        echo "ファンファーレ！！ \n\n";
        break;
    }

    $turn++;
}

echo "戦闘終了 \n\n";
// 現在のHP表示
foreach ($members as $member) {
    echo $member->getName() . "　：　" . $member->getHitPoint() . "/" . $member::MAX_HITPOINT . "\n";
}
echo "\n";
foreach ($enemies as $enemy) {
    echo $enemy->getName() . "　：　" . $enemy->getHitPoint() . "/" . $enemy::MAX_HITPOINT . "\n";
}
