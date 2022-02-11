<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/lib/Loader.php';
require_once dirname(__FILE__) . '/lib/Utility.php';

// aoutload
$loader = new Loader();
$loader->regDirectory(__DIR__ . '/classes');
$loader->register();

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

$messageObj = new Message;

while (!$isFinishFlag) {
    echo "*** $turn ターン目 *** \n\n";

    // show party's HP
    $messageObj->displayStatusMessage($members);
    $messageObj->displayStatusMessage($enemies);

    // attack
    $messageObj->displayAttackMessage($members, $enemies);
    $messageObj->displayAttackMessage($enemies, $members);

    // 戦闘終了チェック
    $isFinishFlag = isFinish($members);
    if ($isFinishFlag) {
        $message = "GAME OVER ... \n\n";
        break;
    }
    $isFinishFlag = isFinish($enemies);
    if ($isFinishFlag) {
        $message = "ファンファーレ \n\n";
        break;
    }

    $turn++;
}

echo "戦闘終了 \n\n";
echo $message;
// 現在のHP表示
$messageObj->displayStatusMessage($members);
$messageObj->displayStatusMessage($enemies);
